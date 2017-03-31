$(function(){
    var key = getCookie('key');
    if (!key) {
        window.location.href = WapSiteUrl + '/tmpl/member/login.html';
        return;
    }
    $.getJSON(ApiUrl + '/index.php?act=member_index&op=my_asset', {key:key}, function(result){
        checkLogin(result.login);
        $('#predepoit').html(result.datas.predepoit+' ₱');
        $('#rcb').html(result.datas.available_rc_balance+' ₱');
        $('#voucher').html(result.datas.voucher+' Pcs');
        $('#redpacket').html(result.datas.redpacket+' Pcs');
        $('#point').html(result.datas.point+' Point');
    });
});