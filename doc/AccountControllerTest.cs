using Bps.DataCollection.Web.Controllers;
using Bps.DataCollection.Web.Models;
using BpsDataCollectionWeb.Tests.Fakes;
using Microsoft.VisualStudio.TestTools.UnitTesting;
using System;
using System.Collections.Generic;
using System.Globalization;
using System.Linq;
using System.Threading;
using System.Threading.Tasks;
using System.Web.Mvc;

namespace BpsDataCollectionWeb.Tests.Controllers
{
    /// <summary>
    /// This is the test class for all authentication scenarios.
    /// Description from PBI 145 : Connexion.
    /// Connexion au site avec sa carte d'identité. Si l'utilisateur essaye de naviguer vers une page
    /// sécurisée ou s'il clique sur le lien "Login", il sera invité par son navigateur à insérer sa 
    /// carte d'identité et à entrer son code PIN. Ensuite, il sera redirigé soit vers la page 
    /// sécurisée (si navigation directe), soit vers la page d'accueil (si via lien Login). Dans les 
    /// deux cas, il verra un message "Bienvenue "nom complet" en haut de l'écran et le lien Login 
    /// devient un lien Logoff.
    /// </summary>
    [TestClass]
    public class AccountControllerTest
    {
        /// <summary>
        /// Scénario 1 : connexion via le bouton "Login"
        ///     Étant donné :
        ///         un utilisateur délogué de l'application
        ///     Quand :
        ///         il clique sur le lien "Login" dans le menu
        ///     Alors :
        ///         un popup l'invite à insérer sa carte d'identité et à entrer son code pin.
        /// 
        /// Scénario 2 : connexion via le bouton "Login" (suite)
        ///     Étant donné :
        ///         un utilisateur qui s'est identifié avec sa carte d'identité en cliquant sur le lien "Login"
        ///     Quand :
        ///         il entre le code pin correct
        ///         et sa carte d'identité est reconnue comme autorisée par le système
        ///     Alors :
        ///         il est loggué dans le système et il est redirigé vers la page d'accueil.
        /// </summary>
        /// <returns>The <see cref="Task"/> object used for async processing.</returns>
        [TestMethod]
        public async Task US02_1_and_2_Login_via_the_menu_link()
        {
            // Arrange
            var controllerBuilder = new TestControllerBuilder();
            var controller = controllerBuilder.CreateController<AccountController>();

            // Act
            var result = await controller.Login(string.Empty);

            // Assert
            Assert.IsTrue(controllerBuilder.AuthenticationManager.SignInCalledCount > 0, "The user has not been signed in.");
            Assert.IsInstanceOfType(result, typeof(RedirectToRouteResult), "The action result should be a redirect to /home/index");
            var redirectToRouteResult = result as RedirectToRouteResult;
            Assert.AreEqual("Home", redirectToRouteResult.RouteValues["controller"], "The action result should be a redirect to /home/index");
            Assert.AreEqual("Index", redirectToRouteResult.RouteValues["action"], "The action result should be a redirect to /home/index");
        }

        /// <summary>
        /// Scénario 3 : connexion via tentative d'accéder directement à une page sécurisée
        ///     Étant donné :
        ///         un utilisateur délogué de l'application
        ///     Quand :
        ///         il clique sur le lien "Formulaires" dans le menu
        ///     Alors :
        ///         un popup l'invite à insérer sa carte d'identité et à entrer son code pin.
        /// </summary>
        [TestMethod]
        public void US02_3_Login_by_accessing_a_secured_page()
        {
            // Arrange
            var controller = new FormController();

            // Act
            var type = controller.GetType();
            var attributes = type.GetCustomAttributes(typeof(AuthorizeAttribute), false);
            var authorizeFound = attributes.Any(); 
            var methodInfo = type.GetMethod("Index");
            attributes = methodInfo.GetCustomAttributes(typeof(AuthorizeAttribute), false);
            authorizeFound = authorizeFound || attributes.Any();

            // Assert
            Assert.IsTrue(authorizeFound, "The Index method or the whole FormController class should be secured with the Authorize attribute.");
        }

        /// <summary>
        /// Scénario 4 : connexion via tentative d'accéder directement à une page sécurisée (suite)
        ///     Étant donné :
        ///         un utilisateur qui s'est identifié avec sa carte d'identité en cliquant sur le lien "Formulaires"
        ///     Quand :
        ///         son identité est reconnue comme autorisée
        ///     Alors :
        ///         il est loggué dans le système
        ///         et il est redirigé vers la page Formulaires.
        /// </summary>
        /// <returns>The <see cref="Task"/> object used for async processing.</returns>
        [TestMethod]
        public async Task US02_4_Redirect_to_original_destination_after_login()
        {
            // Arrange
            var authenticationManager = new FakeAuthenticationManager();
            var controllerBuilder = new TestControllerBuilder()
            {
                AuthenticationManager = authenticationManager
            };
            var controller = controllerBuilder.CreateController<AccountController>();

            // Act
            var result = await controller.Login("/form/index");

            // Assert
            Assert.IsTrue(authenticationManager.SignInCalledCount > 0, "The user has not been signed in.");
            Assert.IsInstanceOfType(result, typeof(RedirectResult), "The action result should be a redirect to /form/index");
            var redirectResult = result as RedirectResult;
            Assert.AreEqual("/form/index", redirectResult.Url, "The action result should be a redirect to /form/index");
        }

        /// <summary>
        /// Scénario 5 : utilisateur non-autorisé
        ///     Étant donné :
        ///         un utilisateur inconnu du système
        ///     Quand :
        ///         il s'authentifie avec sa carte d'identité
        ///     Alors :
        ///         il est renvoyé vers une page qui affiche un message l'invitant à prendre contacte avec BPS pour demander un accès au site.
        /// </summary>
        /// <returns>The <see cref="Task"/> object used for async processing.</returns>
        [TestMethod]
        public async Task US02_5_Unknown_user()
        {
            // Arrange
            var controllerBuilder = new TestControllerBuilder()
            {
                CertificateSubject = "SERIALNUMBER=109876543210,G=Unknown,SN=Person,CN=Unknown Person (Authentication),C=BE"
            };
            var controller = controllerBuilder.CreateController<AccountController>();

            // Act
            var result = await controller.Login("/form/index");

            // Assert
            Assert.IsTrue(controllerBuilder.AuthenticationManager.SignInCalledCount == 0, "The user should not have been signed in.");
            Assert.IsInstanceOfType(result, typeof(ViewResult), "The action result should be a redirect to the login view.");
            var viewResult = result as ViewResult;
            Assert.AreEqual(string.Empty, viewResult.ViewName, "The action result should be a redirect to the login view.");
        }

        /// <summary>
        /// Scénario 6 : refus en cas d'erreur de certificat
        ///     Étant donné :
        ///         un utililisateur qui tente de s'authentifier
        ///     Quand :
        ///         un certificat de carte d'identité valide ne peut être présenté
        ///     Alors :
        ///         l'utilisateur est renvoyé vers la page d'erreur d'authentification
        /// </summary>
        /// <returns>The <see cref="Task"/> object used for async processing.</returns>
        [TestMethod]
        public async Task US02_6_Invalid_or_absent_eid_certificate()
        {
            // Subject empty = no client certificate sent
            var controllerBuilder = new TestControllerBuilder()
            {
                CertificateSubject = string.Empty
            };
            var controller = controllerBuilder.CreateController<AccountController>();

            var result = await controller.Login("/some/url");

            Assert.IsInstanceOfType(result, typeof(HttpUnauthorizedResult), "In case of a missing client certificate, the login action should send back an unauthorized error code.");
        }

        /// <summary>
        /// Scénario 1: nom et prénom connus
        ///     Étant donné:
        ///         un utilisateur avec les infos suivantes sur sa carte d'identité : SERIALNUMBER=012345678910,G=Grégory Raoul,SN=Hermans,CN=Grégory Hermans (Authentication),C=BE 
        ///         un profil préenregistré dans le système avec nom = Grégory, prénom = Hermans, n°reg.nat. = <inconnu> et e-mail = gregory.hermans@bps.brussels
        ///     Quand
        ///         l'utilisateur se connecte avec sa carte d'identité
        ///     Alors
        ///         l'utilisateur est logué dans le système 
        ///         il arrive sur la page d'encodage / confirmation de son e-mail avec le champ e-mail contenant gregory.hermans@bps.brussels 
        ///         les champs nom, prénom et n°reg.nat.sont mis à jour dans le système avec les informations de la carte d'identité.
        /// </summary>
        /// <returns>The <see cref="Task"/> object used for async processing.</returns>
        [TestMethod]
        public async Task US03_1_First_login_given_name_and_surname_known()
        {
            // Arrange
            var usersList = new List<ApplicationUser>
            {
                new ApplicationUser() {
                    Id = "12345",
                    UserName = null,
                    GivenName = "gregory",
                    SurName = "hermans",
                    Email = "gregory.hermans@bps.brussels",
                    EmailConfirmed = false,
                    SecurityStamp = Guid.NewGuid().ToString()
                }
            };
            var controllerBuilder = new TestControllerBuilder()
            {
                UsersList = usersList,
                CertificateSubject = "SERIALNUMBER=012345678910,G=Grégory Raoul,SN=Hermans,CN=Grégory Hermans (Authentication),C=BE"
            };
            var controller = controllerBuilder.CreateController<AccountController>();

            // Act
            var result = await controller.Login(string.Empty);

            // Assert
            Assert.IsTrue(controllerBuilder.AuthenticationManager.SignInCalledCount > 0, "The user should be signed in.");
            Assert.IsInstanceOfType(result, typeof(RedirectToRouteResult), "The action result should be a redirect to /account/register");
            var redirectToRouteResult = result as RedirectToRouteResult;
            Assert.AreEqual(null, redirectToRouteResult.RouteValues["controller"], "The action result should be a redirect to /account/register");
            Assert.AreEqual("Register", redirectToRouteResult.RouteValues["action"], "The action result should be a redirect to /account/register");
            Assert.AreEqual(TestUtilities.ComputeMd5Hash("012345678910"), usersList[0].UserName);
            Assert.AreEqual("Grégory Raoul", usersList[0].GivenName);
            Assert.AreEqual("Hermans", usersList[0].SurName);
            Assert.AreEqual("Grégory Hermans", usersList[0].FullName);
        }

        /// <summary>
        /// Scénario 2: numéro de registre national connu
        ///     Étant donné:
        ///         un utilisateur avec les infos suivantes sur sa carte d'identité : SERIALNUMBER=012345678910,G=Gregory Raoul,SN=Hermans,CN=Gregory Hermans (Authentication),C=BE 
        ///         un profil préenregistré dans le système avec nom = < inconnu >, prénom = < inconnu >, n°reg.nat. = 012345678910 et e-mail = <inconnu> 
        ///     Quand :
        ///         il se connecte avec sa carte d'identité 
        ///     Alors:
        ///         l'utilisateur est logué dans le système 
        ///         il arrive sur la page d'encodage / confirmation de son e-mail avec le champ e-mail vide 
        ///         les champs nom, prénom et n°reg.nat.sont mis à jour dans le système avec les informations de la carte d'identité.
        /// </summary>
        /// <returns>The <see cref="Task"/> object used for async processing.</returns>
        [TestMethod]
        public async Task US03_2_First_login_serial_number_known()
        {
            // Arrange
            var controllerBuilder = new TestControllerBuilder()
            {
                CertificateSubject = "SERIALNUMBER=012345678910,G=Grégory Raoul,SN=Hermans,CN=Grégory Hermans (Authentication),C=BE"
            };
            var user = controllerBuilder.UsersList[0];
            user.Id = "12345";
            user.GivenName = null;
            user.SurName = null;
            user.FullName = null;
            user.Email = null;
            user.EmailConfirmed = false;
            var controller = controllerBuilder.CreateController<AccountController>();

            // Act
            var result = await controller.Login(string.Empty);

            // Assert
            Assert.IsTrue(controllerBuilder.AuthenticationManager.SignInCalledCount > 0, "The user should be signed in.");
            Assert.IsInstanceOfType(result, typeof(RedirectToRouteResult), "The action result should be a redirect to /account/register");
            var redirectToRouteResult = result as RedirectToRouteResult;
            Assert.AreEqual(null, redirectToRouteResult.RouteValues["controller"], "The action result should be a redirect to /account/register");
            Assert.AreEqual("Register", redirectToRouteResult.RouteValues["action"], "The action result should be a redirect to /account/register");
            Assert.AreEqual(TestUtilities.ComputeMd5Hash("012345678910"), controllerBuilder.UsersList[0].UserName);
            Assert.AreEqual("Grégory Raoul", controllerBuilder.UsersList[0].GivenName);
            Assert.AreEqual("Hermans", controllerBuilder.UsersList[0].SurName);
            Assert.AreEqual("Grégory Hermans", controllerBuilder.UsersList[0].FullName);
        }

        /// <summary>
        /// Scénario 3 : Encodage / confirmation de l'adresse e-mail.
        ///     Étant donné:
        ///         un utilisateur qui arrive sur la page d'encodage / confirmation de son e-mail
        ///         le champ e-mail est pré remplis avec gregory.hermans@bps.brussels
        ///     Quand : 
        ///         il clique sur le bouton "Confirmer"
        ///     Alors :
        ///         l'adresse mail est enregistrée dans le système
        ///         l'utilisateur est redirigé vers la page d'accueil ou la page qu'il avait tenté d'ouvrir
        /// </summary>
        /// <returns></returns>
        [TestMethod]
        public async Task US03_3_Register_email()
        {
            var userEmail = "gregory.hermmans@bps.brussels";
            var returnUrl = "/some/url";
            var userName = TestUtilities.ComputeMd5Hash("012345678910");
            var roles = new string[] { };
            var userId = "12345";
            var usersList = new List<ApplicationUser>
            {
                new ApplicationUser() {
                    Id = userId,
                    UserName = userName,
                    GivenName = "Grégory Raoul",
                    SurName = "Hermans",
                    FullName = "Grégory Hermans",
                    Email = userEmail,
                    EmailConfirmed = false,
                    SecurityStamp = Guid.NewGuid().ToString()
                }
            };
            var controllerBuilder = new TestControllerBuilder()
            {
                UsersList = usersList,
                AssignedRoles = roles
            };
            var controller = controllerBuilder.CreateController<AccountController>();
            var model = new RegisterViewModel() { Email = userEmail, ReturnUrl = returnUrl };
            var result = await controller.Register(model);

            var userIndDB = usersList.First(u => u.Id == "12345");
            Assert.AreEqual(userEmail, userIndDB.Email, "The e-mail should be saved in the database.");
            Assert.IsTrue(userIndDB.EmailConfirmed, "The e-mail should be marked as confirmed in the DB.");
            Assert.IsInstanceOfType(result, typeof(RedirectResult), "The action result should be a redirect to the original url.");
            var redirectResult = result as RedirectResult;
            Assert.AreEqual(returnUrl, redirectResult.Url, "The action result should be a redirect to the original url.");
        }

        /// <summary>
        /// Scénario 4 : adresse e-mail obligatoire
        ///     Étant donné:
        ///         un utilisateur qui arrive sur la page d'encodage / confirmation de son e-mail
        ///         le champ e-mail est vide
        ///     Quand : 
        ///         il clique sur le bouton "Confirmer"
        ///     Alors :
        ///         un message d'erreur lui indique que l'adresse mail est manquante
        ///         il reste sur la même page
        /// </summary>
        [TestMethod]
        public void US03_4_Email_address_is_required_in_registration()
        {
            Thread.CurrentThread.CurrentCulture = new CultureInfo("en-US");
            Thread.CurrentThread.CurrentUICulture = new CultureInfo("en-US");
            var model = new RegisterViewModel() { Email = null, ReturnUrl = "/some/url" };

            var validationResults = TestUtilities.ValidateModel(model);
            Assert.IsTrue(validationResults.Count > 0, "Model validation should send at least one error for the Email field.");
            var emailError = validationResults.FirstOrDefault(r => r.MemberNames.Any(mn => mn == "Email"));
            Assert.IsNotNull(emailError, "Model validation should notify at least one error for the Email field.");
            Assert.IsTrue(emailError.ErrorMessage == "The Adresse de messagerie field is required.", string.Format("Model validation should send \"The Adresse de messagerie field is required.\" error and not \"{0}\".", emailError.ErrorMessage));
        }

        /// <summary>
        /// Scénario 5 : adresse e-mail valide
        ///     Étant donné:
        ///         un utilisateur qui arrive sur la page d'encodage / confirmation de son e-mail
        ///         le champ e-mail est vide
        ///     Quand : 
        ///         il entre gregory.hermans.bps.lan comme adresse e-mail
        ///         il clique sur le bouton "Confirmer"
        ///     Alors :
        ///         un message d'erreur lui indique que l'adresse mail n'est pas valide
        ///         il reste sur la même page
        /// </summary>
        [TestMethod]
        public void US03_5_Invalid_email_address_in_registration()
        {
            Thread.CurrentThread.CurrentCulture = new CultureInfo("en-US");
            Thread.CurrentThread.CurrentUICulture = new CultureInfo("en-US");
            var model = new RegisterViewModel() { Email = "gregory.hermmans.bps.lan", ReturnUrl = "/some/url" };
            var validationResults = TestUtilities.ValidateModel(model);
            Assert.IsTrue(validationResults.Count > 0, "Model validation should send at least one error for the Email field.");
            var emailError = validationResults.FirstOrDefault(r => r.MemberNames.Any(mn => mn == "Email"));
            Assert.IsNotNull(emailError, "Model validation should notify at least one error for the Email field.");
            Assert.IsTrue(emailError.ErrorMessage == "The Adresse de messagerie field is not a valid e-mail address.", string.Format("Model validation should send \"The Adresse de messagerie field is not a valid e-mail address.\" error and not \"{0}\".", emailError.ErrorMessage));
        }

        /// <summary>
        /// Scénario 4 & 5 : erreur adresse e-mail
        ///     Étant donné:
        ///         un utilisateur qui arrive sur la page d'encodage / confirmation de son e-mail
        ///         le champ e-mail est vide ou incorrect
        ///     Quand : 
        ///         il clique sur le bouton "Confirmer"
        ///     Alors :
        ///         un message d'erreur lui indique son erreur
        ///         il reste sur la même page
        /// </summary>
        /// <returns>The <see cref="Task"/> object used for async processing.</returns>
        [TestMethod]
        public async Task US03_4_5_User_should_be_stay_on_registration_page_when_there_are_errors()
        {
            var userEmail = "gregory.hermmans.bps.lan";
            var returnUrl = "/some/url";
            var userName = TestUtilities.ComputeMd5Hash("012345678910");
            var userId = "12345";
            var roles = new string[] { };
            var usersList = new List<ApplicationUser>
            {
                new ApplicationUser() {
                    Id = userId,
                    UserName = userName,
                    GivenName = "Grégory Raoul",
                    SurName = "Hermans",
                    FullName = "Grégory Hermans",
                    Email = null,
                    EmailConfirmed = false,
                    SecurityStamp = Guid.NewGuid().ToString()
                }
            };
            var controllerBuilder = new TestControllerBuilder()
            {
                UsersList = usersList,
                AssignedRoles = roles
            };
            var controller = controllerBuilder.CreateController<AccountController>();
            var model = new RegisterViewModel() { Email = userEmail, ReturnUrl = returnUrl };

            controller.ModelState.AddModelError("Email", "Le champ Adresse de messagerie n'est pas une adresse électronique valide.");
            var result = await controller.Register(model);
            var userIndDB = usersList.First(u => u.Id == "12345");
            Assert.AreNotEqual(userEmail, userIndDB.Email, "The e-mail should not be changed in the database.");
            Assert.IsFalse(userIndDB.EmailConfirmed, "The e-mail should not be marked as confirmed in the DB.");
            Assert.IsInstanceOfType(result, typeof(ViewResult), "The action result should be a redirect to the same view.");
            var viewResult = result as ViewResult;
            Assert.AreEqual(string.Empty, viewResult.ViewName, "The action result should be a redirect to the same view.");
        }

        /// <summary>
        /// Scénario 1 : Affichage du menu "Utilisateurs"
        ///     Étant donné :
        ///         un utilisateur connecté avec le rôle administrateur
        ///     Quand :
        ///         on affiche la page d'accueil
        ///     Alors :
        ///         Le menu "Utilisateurs" est visible
        /// 
        /// Untestable: the logic will be in a view.
        /// This test only validates that the isInRole method (which will be used in the view) works as expected.
        /// </summary>
        [TestMethod]
        public void US05_1_The_isInRole_method_should_return_the_correct_value()
        {
            var roles = new string[] { "Administrators" };
            var usersList = new List<ApplicationUser>
            {
                new ApplicationUser() {
                    Id = "12345",
                    UserName = TestUtilities.ComputeMd5Hash("012345678910"),
                    GivenName = "Grégory Raoul",
                    SurName = "Hermans",
                    FullName = "Grégory Hermans",
                    Email = null,
                    EmailConfirmed = false,
                    SecurityStamp = Guid.NewGuid().ToString()
                }
            };
            var controllerBuilder = new TestControllerBuilder()
            {
                UsersList = usersList,
                AssignedRoles = roles
            };
            var controller = controllerBuilder.CreateController<AccountController>();

            Assert.IsTrue(controller.HttpContext.User.IsInRole("Administrators"), "The user should be in the Administrators group.");
        }
    }
}
