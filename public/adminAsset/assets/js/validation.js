function checkCategoryName(){
    var category = $('#category').val();
    var regex=/^[a-z,A-Z ]{2,15}$/;
    if(regex.test(category)){
        $('#errorMessage').html(' ')
        return true;
    }else{
        $('#errorMessage').html('You can use only 2 to 15 letters')
        return false;
    }
}
$('#category').keyup(function () {
    var res =checkCategoryName();
    if(res ==true){
        $('#catBtn').prop('disabled', false);
        // $('#errorMessage').html(' ')
    }else{
        $('#catBtn').prop('disabled', true);
        // $('#errorMessage').html('You can use only 2 to 15 letters')
    }
})

function checkCategoryCode(){
    var category = $('#categoryCode').val();
    var regex=/^[a-z,A-Z ]{2,15}$/;
    if(regex.test(category)){
        $('#errorMessageCode').html(' ')
        return true;
    }else{
        $('#errorMessageCode').html('You can use only 2 to 15 letters and Numbers')
        return false;
    }
}
$('#categoryCode').keyup(function () {
    var res =checkCategoryCode();
    if(res ==true){
        $('#catBtn').prop('disabled', false);
        // $('#errorMessage').html(' ')
    }else{
        $('#catBtn').prop('disabled', true);
        // $('#errorMessage').html('You can use only 2 to 15 letters')
    }
})

$('#catForm').submit(function () {
    if(checkCategoryName() == true && checkCategoryCode() == true ){
        $('#catBtn').prop('disabled', false);
    }else{
        $('#catBtn').prop('disabled', false);
    }
})


