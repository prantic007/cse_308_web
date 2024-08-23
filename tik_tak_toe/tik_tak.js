let btn = document.querySelectorAll(".bt");
let rst = document.querySelector(".rstbt");
let res = document.querySelector(".result");

let flag = true;
btn.forEach((bt) =>{
   bt.addEventListener("click",(evt) =>{
        if(flag === true){
            bt.innerText = "O";
            bt.style.color = "green";
            flag = false;
        }
        else{
            bt.innerText = "X";
            bt.style.color = "red";
            flag = true;
        }
        bt.disabled = true;
        cheack();
   }); 
});

rst.addEventListener("click",(evt) =>{

     btn.forEach((bt) =>{
        bt.innerText = "";
        bt.disabled = false;
     });

     res.innerText = "No one";
     res.style.color = "#f9fe02";
});

const  win = [
  [0,1,2],[0,3,6],[0,4,8],[3,4,5],[1,4,7],[2,5,8],[2,4,6],[6,7,8],
];

// console.log(win[0]);

const cheack = ()=>{
     let winner ="";
    for(let i =0 ; i < 8 ; i++){
        if(btn[win[i][0]].innerText === btn[win[i][1]].innerText  &&  btn[win[i][1]].innerText === btn[win[i][2]].innerText     && btn[win[i][0]].innerText !== ""){
            btn.forEach((bt) =>{
                winner = btn[win[i][0]].innerText;
                res.innerText = winner;
                res.style.color = "green";
                bt.disabled = true;
            });
        }
    }
}
