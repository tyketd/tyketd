<div  id="chatTrajet" style="display: none">
    <div class="d-flex flex-column p-2 mt-3 border" >
        <div class="d-flex flex-row">
            <div class="d-flex p-2  w-100 mr-2  flex-column text-white">
                <div class="chatelt flex-column d-flex   p-2">
                    <span class="name d-flex text-bold">Arno Ghislain : </span>
                <span class="d-flex text-small chatmsg">Lorem ipsum de lore
                si un poko de la diet </span>
                <span class="d-fex flex-column mt-2  text-white-50   text-right">
                    <i class="d-flex flex-row justify-content-end text-small">Aujourd'hui à 08:42</i>
                </span>
                    <i class="fa fa-caret-right"></i>
                </div>
                <div class="d-flex flex-column ">
                    <div class="d-flex text-gray text-small flex-row justify-content-end">Distribué</div>
                </div>
            </div>
            <div class="d-flex flex-column pt-2">
                <img src="{{asset('img/tof.jpg')}}" alt="imagechat" class="d-flex justify-content-center">
            </div>
        </div>


        <div class="d-flex flex-row">
            <div class="d-flex p-2  w-100 mr-2   flex-column ">
                <div class="blockwriemsg border flex-column d-flex   p-2">
                    <textarea  class="d-flex   p-2 inputdiv text-small " placeholder="Rédiger votre message ici"></textarea>
                    <i class="fa fa-caret-right"></i>
                    <div class="d-flex flex-column mt-2">
                        <div class="d-flex flex-row justify-content-end">
                            <input type="button" class="btn bg-blue text-white" value="Envoyer">
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex flex-column pt-2">
                <img src="{{asset('img/tof.jpg')}}" alt="imagechat" class="d-flex justify-content-center">
            </div>
        </div>

        <div class="d-flex flex-column mt-2 justify-content-center">
            <span>Nous pouvons modérer les messages. <a href="#">voir les regles de rédaction</a></span>
        </div>
    </div>
</div>

