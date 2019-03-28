function check(input) {
    if (input.value !== document.getElementById('inputpassword').value) {
        input.setCustomValidity('Password Must be Matching.');
    } else {
        // input is valid -- reset the error message
        input.setCustomValidity('');
    }
}

function validateForm(){

    var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
    var re1 = /.{8,}/;

    var probblems=[];

    console.log(document.getElementById("firstname").value);

    if(document.getElementById("firstname").value===""){
        probblems.push("Please enter a first name\n")

    }

    if(document.getElementById("lastname").value===""){
        probblems.push("Please enter a last name\n")
    }

    if (document.getElementById("inputEmail").value ==="" || !re.test(document.getElementById("inputEmail").value)){
        probblems.push("Please enter a valid email\n")
    }

    if(!re1.test(document.getElementById("inputpassword").value)){
        probblems.push("Please enter password 8 char or more\n")
    }

    if(document.getElementById('inputpassword').value!==document.getElementById('confirmpassword').value){

        probblems.push("Please confirm your password\n")
    }
    if(document.getElementById('exampleCheck1').checked===false){
        probblems.push("Please agree to privacy agreement\n")
    }

    if(probblems.length===0){
        return true;
    }else{
        var temp="";
        for (var i = 0; i < probblems.length; i++) {
            temp = temp + probblems[i]
        }



        alert(temp);
        return false;
    }

    console.log(probblems);




}