function preRegister(){

    const method                    = 'post';
    const url                       = '/Main/register';
    const app                       = $("input:radio[name='chooseStore']:checked").val();
    const phone                     = '010' + $("#phone").val();
    const ipt1                      = $("#ipt1").is(':checked');
    const ipt2                      = $("#ipt2").is(':checked');
    const ad_agreement              = $("#ipt3").is(':checked');
    const check_phone               = /^010\d{8}$/;
    const check_phone2              = /(\d)\1{7}/;

    if(app !== 'apple' && app !== 'google'){
        $('#alert3').addClass('isActive');
        return;
    }

    if(!check_phone.test(phone) || check_phone2.test(phone)){
        $('#alert2').addClass('isActive');
        return;
    }

    if(!ipt1 || !ipt2){
        $('#alert4').addClass('isActive');
        return;
    }

    const data                      = {app, phone, ipt1, ipt2, ad_agreement};

    $.ajax({
        url: url,
        type: method,
        dataType: "JSON",
        data: data,
        success: function (result){
            switch(result.status) {
                case 'success':

                    $("input:radio[name='chooseStore']").prop('checked', false);
                    $("#phone").val('');
                    $("#ipt1").prop('checked', false);
                    $("#ipt2").prop('checked', false);
                    $("#ipt3").prop('checked', false);
                    $(".checked").removeClass('checked');

                    $('#done').addClass('isActive');
                    break;

                case 'app_error':
                    $('#alert3').addClass('isActive');
                    break;

                case 'phone_error':
                    $('#alert2').addClass('isActive');
                    break;

                case 'ipt_error':
                    $('#alert4').addClass('isActive');
                    break;

                case 'duplicate_error':
                    alert('duplicate error');
                    break;

                case 'db_error':
                    alert('db error');
                    break;

                default:
                    alert('unknown error');
            }
        },
        error: (error) => {
            console.log(error);
        }
    })

    // request(url, method, data)
    //     .then(response => {
    //         console.log(response.data);
    //     })
    //     .catch(error => {
    //         console.error('axios error: ', error);
    //     })
}

function mbtiRegister(){

    const testBtn = $('#testBtn');
    testBtn.on('click', () => {
        gtag('event', 'click_testBtn', {
            'button_name': 'testBtn'
        });
    });

    const method        = 'post';
    const url           = '/mbti/register';

    let list            = [];

    for (let i = 1; i <= 12; i++){
        let temp        = '#q' + i;
        list[i-1] = $(temp).val();
        //list.push($(temp).val())
    }

    $.ajax({
        url: url,
        type: method,
        dataType: "JSON",
        data: {list: list},
        success: function (result){
            switch(result.status) {

                case 'success':
                    // 성공 시 추가
                    break;

                case 'error':
                    // 에러 시 추가
                    break;

                default :
                    alert(result.status);

            }
        }
    })
}

function twitterShare() {
    const title = 'ABYSSMATE';
    const url = window.document.location.href;
    let twitter_url = "https://twitter.com/intent/tweet?text=" + title +
        "&url=" + url + "&original_referer=&ref=twit";
    const twwin = window.open(twitter_url, 'twwin', 'menubar=yes,toolbar=yes,status=yes,resizable=yes,location=yes,scrollbars=yes');
    if (twwin) twwin.focus();
}

function linkShare() {
    navigator.clipboard.writeText(window.location.href);
    $('#alert1').addClass('isActive');
}

    // function request(url, method, data  = null) {
    // const config                    = {
    //                                     method,
    //                                     url,
    //                                     headers: {
    //                                         'Content-Type': 'application/json; charset=utf-8',
    //                                         'Access-Control-Allow-Origin': '*',
    //     }
    // };
    //
    // if (data) {
    //     config.data                 = JSON.stringify(data);
    // }
    //
    // console.log(config);
    //
    // return axios(config)
        // .then(response => {
        //     console.log(response.data);
        // })
        // .catch(error => {
        //     console.error('axios error:', error);
        // });
// }