class CommentCaMarche{
	construct(){
		this.Page=$(".Page");
		this.Id=$("#HowIsWorks");
	}
}

let myCommentCaMarche=new CommentCaMarche();
$(function(){
	if(myCommentCaMarche.Page.attr("data-page")==="HowIsWorks"){

function setClassActive(parent,child){
		// Get the container element
var btnContainer = document.getElementById(parent);

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName(child);

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
}
setClassActive('group','list-group-item');
setClassActive('table-ti','nav-select');
	}
});

