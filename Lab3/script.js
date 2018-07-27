var edtFruit = document.getElementById('edtNameFruit')
var txtNameFruit = document.getElementById('txtNameFruit')
var btnSubmit = document.getElementById('btnSubmit')
var imgFruit = document.getElementById('imgFruit')
let listFruit = ["cam","chuối","táo","dâu"]
btnSubmit.addEventListener('click',onClick,false)
function onClick() {
    var nameFruit = edtFruit.value
    if (nameFruit == null || nameFruit == ""){
        alert("Bạn chưa nhập gì")
    } else if (!isNaN(nameFruit)){
        alert("Bạn vừa nhập số")
    } else {
        for (let i = 0; i < listFruit.length; i++) {
            if (nameFruit == listFruit[i]){
                txtNameFruit.textContent = nameFruit
                imgFruit.src = listFruit[i]+".jpeg"
                return
            }
            txtNameFruit.textContent = "Không xác định"
        }
    }
}