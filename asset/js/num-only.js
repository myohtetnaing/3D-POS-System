function numOnly(input){
    var num = /[^0-9]/gi;
    input.value = input.value.replace(num,"");
}