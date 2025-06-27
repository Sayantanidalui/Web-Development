let boxes=document.querySelectorAll(".box");
let msg=document.querySelector(".msg");
let para= document.querySelector("#msg");
let resetbtn=document.querySelector("#reset");

let turn0 = true;
 
const winnigpatterns =[
    [0,1,2],
    [0,3,6],
    [0,4,8],
    [1,4,7],
    [2,5,8],
    [2,4,6],
    [3,4,5],
    [6,7,8]
];
const resetGame=()=>{
    turn0=true;
    count=0;
    enableBoxes();
    msg.classList.add("hide");
}

boxes.forEach((box)=>{
    box.addEventListener("click", ()=> {
        console.log("box was clicked");
        if(turn0){
           box.innerText ="0" ;
           turn0= false;
        }
        else{
            box.innerText = "X";
            turn0=true;
        }
        box.disabled = true;

        checkwinner();
    });
});
const disabled =()=>{
    for(let box of boxes){
        box.disabled=true;
    }
};
const enableBoxes=()=>{
  for(let box of boxes){
    box.disabled=false;
    box.innerText="";
  }
}
const showwinner = (winner) =>{
    msg.innerText = `Congratulation the winner is ${winner}`;
  msg.classList.remove("hide");
  disabled();

}
const checkwinner =()=>{
    for ( let patterns of winnigpatterns ){
         let position1 = boxes[patterns[0]].innerText;
       let position2 = boxes[patterns[1]].innerText;
       let position3 =  boxes[patterns[2]].innerText;
    
     if(position1!= "" && position2!=""&& position3!=""){
        if(position1==position2 && position2==position3){
            console.log("Winner",position1);
            showwinner(position1);
        }
     }
    }
};
resetbtn.addEventListener("click",resetGame);