function Test(){
    // // var numri = (1,2,4,'1','2');
    // var response  =document.querySelector('#inputID').value;
    // console.log(response)
    // var paragrafi=document.querySelector('.eno').innerHTML; 
    // console.log(paragrafi);
    // var number
    
    // if(number == 1){
    // console.log('Numrat jane te barabart');
    // }
    // else(
    //     console.log('nuk jane')
    // )
    var email ='es55123@ubt-uni.net';
    var email1= 'gd53776@ubt-uni.net';
    var eno = document.getElementById('input1').value;
    var eno1 = document.getElementById('input2').value;
    if(eno !=email1){
        alert("Email i shtypur gabim");  
        return false;
    }

    
    else if(eno1 !=1234567 ){
        alert("Keni shtypur gabim passwordin!");
        return false;
    }
    else{
        alert("Prisni verifikimin")
    }
}
