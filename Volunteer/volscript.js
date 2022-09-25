function manage(pick_btn_cus) {
    var bt = document.getElementById('pick_btn_cus');
    if (pick_btn_cus.value = '') {
        bt.disabled = false;
    }
    else {
        bt.disabled = true;
    }
}