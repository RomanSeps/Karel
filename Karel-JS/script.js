const size = 10;
const field = document.getElementById("grid");

let Karel = {x: 0, y: 0, d: 0};

function Reset(){
    Karel = {x: 0, y: 0, d: 0};
    for(let i = 1; i<=size; i++){
        for(let j = 1; j<=size; j++){
           const idk = document.createElement("div");
           field.appendChild(idk);
           idk.dataset.x = j;
           idk.dataset.y = i;
        }
    }
    Refresh();
}

function Refresh(){
    const blocks = document.getElementsByClassName("cube");

    blocks.forEach(idk => {
        idk.classList.remove("Charles");
    });

    let CurrentPosition = field.querySelector('div[data-x="${karel.x}"][data-y="${karel.y}"]');
    CurrentPosition.classList.add("Charles");
    CurrentPosition.innerHTML("K");
}

function commands(command){
    const split = command.split(" ");
    const tfIcare = split[0].toUpperCase();
    const losinIt = 0;

    if(split.lenght <1){
        losinIt = 1;
    }else{
        losinIt = parseInt(split[1], 10);
    }
    
    switch(tfIcare){

        case "KROK":

        case "VLEVOBOK":
            Karel.d += 1;
        case "POLOZ":
            Place()
        case "RESET":
            Reset();
        default:
            console.log("NIGGA CODE ENTERED! IMPOSTER DETECTED!!")

    }
    
}

function Place(){

}


Reset();