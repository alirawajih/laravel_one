let chec=document.getElementById("checkbox");
chec.addEventListener("click", function() {
    if(this.checked){
    document.getElementById("corde").style.display = "";
    document.getElementById("footer").style.display = "";
}
else{
    document.getElementById("corde").style.display = "none";
    document.getElementById("footer").style.display = "none";

}
});
const ned =`
<div class="col-lg-4 col-md-6" id="corde" >
<div class="p-3 border bg-light cord" >
    <img class="img-fluid"  src="imges/1.jpg" alt="imge">
    <h5 class="text-black-50">GENERAL DENTIST</h5>
    <h3 >Dr. Bob Brown </h3>
    <h6 class="fw-lighter">Glavi amet ritnisl libero molestie ante ut fringilla purus
        eros quis glavrid from dolor amet iquam lorem bibendum</h6>

        <ul class="d-flex mt-4 list-unstyled  gap-1 " >
        <li>
            <i class="material-icons" >facebook</i>
        </li>
        <li>
            <a class="d-block text-light" href="https://www.instagram.com/">
            <img src="imges/instegram.png" class="img-fluid" alt=""></i>
        </a>
        </ul>
</div>
</div>
`;

let but=document.getElementById("butt");
but.addEventListener("click",function(){
    document.getElementById("corde").innerHTML+=ned;
    })
