document.addEventListener("keyup", (e) => {
    const key = e.keyCode;
    const xEl = document.getElementById('x');
    const yEl = document.getElementById('y');
    let x = parseInt(xEl.value);
    let y = parseInt(yEl.value);
    if (key == 37) {
        // left
        yEl.value = y - 1 ;
    } else if (key == 38) {
        // top
        xEl.value = x - 1 ;

    } else if (key == 39) {
        // right
        yEl.value = y + 1 ;
    } else if (key == 40) {
        // bottom
        xEl.value = x + 1 ;
    }

    document.getElementById('move_form').submit();
});