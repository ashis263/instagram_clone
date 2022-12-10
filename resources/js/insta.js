function invalidClick(){
    // @ts-ignore
    alert("This feature is not yet available!");
}

function selectPhoto(){
    // @ts-ignore
    let input = document.getElementById("file");
    // @ts-ignore
    alert("Select photo to upload!");
    input.click();

}


function upload(){
    // @ts-ignore
    let form = document.getElementById("upload-form");
    form.submit();
}
