var btn = document.querySelector('.history')
btn.addEventListener('click',hello)
function hello(){
    btn.setAttribute('class','after')
    console.log('THE BUTTON IS CLICKED')
    var h3 = document.querySelector('.now')
    alert("your name is: <?php echo $user_Assoc_array['usersName'];?>");
    h3.innerHTML = "<?php echo $user_Assoc_array['usersName'];?>";
    console.log(name)
}
