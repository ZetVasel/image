

function check() {
    let op = document.forms['form']['circles'].value;
    let x = document.forms["form"]["width"].value;
    let y = document.forms["form"]["height"].value;
    let z = document.forms["form"]["radius"].value;
    if (isNaN(x) || x ===  '' ||isNaN(y) || y === '' |isNaN(z) || z === '' ) {
        alert("Input must be a number");
        return false;
    }
    else if(z>y/2 && z>x/2){
        alert("Radius must be less or equal than a half of widht/height");
        return false;
    }
    else if(op===""){
        alert('choose number of circles')
        return  false;

    }


}