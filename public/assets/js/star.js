function ratingStar(event){

    var checkValue = document.querySelectorAll(".star");
    var checkStar = document.querySelectorAll(".x");
    var checkSmiley = document.querySelectorAll(".em");
    var checkCount = 0;
    // alert(checkValue.length)
    for(var i=0; i<checkValue.length; i++){
        if(checkValue[i]==event.target){
            checkCount = i+1;
        }
    }

    for(var j=0; j<checkCount; j++){
        checkValue[j].checked = true;
        checkStar[j].className = "rated";
        checkSmiley[j].style.display = "none";
    }
    alert(checkCount)
    for(var k=checkCount; k<checkValue.length; k++){
        checkValue[k].checked = false;
        checkStar[k].className = "x"
        checkSmiley[k].style.display = "none";
    }
    if(checkCount == 1){
        document.querySelectorAll(".em")[0].style.display = "block";
    }
    if(checkCount == 2){
        document.querySelectorAll(".em")[1].style.display = "block";
    }
    if(checkCount == 3){
        document.querySelectorAll(".em")[2].style.display = "block";
    }
    if(checkCount == 4){
        document.querySelectorAll(".em")[3].style.display = "block";
    }
    if(checkCount == 5){
        document.querySelectorAll(".em")[4].style.display = "block";
    }
}
