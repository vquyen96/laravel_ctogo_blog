$(document).ready(function(){
	CKEDITOR.replace( 'content',{
		height:'450px'
	} );

	$('#add-image').click(function(){
		$('#file').click();
	});
});

function changeImg(input){
    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
    if(input.files && input.files[0]){
    	var reader = new FileReader();
        //Sự kiện file đã được load vào website
        reader.onload = function(e){
            //Thay đổi đường dẫn ảnh
            $('#add-image').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}