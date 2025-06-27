let modebtn=document.querySelector("#mode");
let currnmode="light";
modebtn.addEventListener("click",()=>{
    if(currnmode==="light"){
        currnmode="dark";
        document.querySelector("body").classList.add("dark");
        document.querySelector("body").classList.remove("light");
    }
    else{
        currnmode="light";
        document.querySelector("body").classList.add("light");
        document.querySelector("body").classList.remove("dark");
    }
});