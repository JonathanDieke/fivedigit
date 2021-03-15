
$( () => {

    $('form input').on('change', function() {
        let radio = $('input[name=flexRadioDefault]:checked', 'form')
        let payment = radio.attr("value")

        let phone = $('.phone').val()

        let div = `
                                <div class="input-group mb-3 momo">
                                    <span class="input-group-text" id="basic-addon1">+225</span>
                                    <input type="text" name="phone" value=${phone} class="form-control phone" placeholder="XX XX XX XX XX" require>
                                </div> `

        $('.momo').remove()

        switch (payment) {
            case "om":
                radio.parent().append(div)
                break;

            case "momo":
                radio.parent().append(div)
                break;

            case "flooz":
                radio.parent().append(div)
                break;

            default:
                break;
        }
    });


    $(".btn-payment").on('click', (e) => {
        e.preventDefault()

        $(".btn-payment").attr("disabled", true)

        let phone = $('.phone').val()
        let code = $('.code').val()

        if( ! phone){
           alert('Entrer un numéro de téléphone pour procéder au paiement !')
           $(".btn-payment").attr("disabled", false)
        }else{

            $('.alert').hide()

            $.ajax({
                url: 'http://localhost:8000/paid',
                data: {phone, code},
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success :() => {

                    let loading  = `<div id="loading mx-auto ml-auto" class="preload">
                                                <div id="loading-center">
                                                    <div class="d-flex justify-content-center spinner" >
                                                        <div class="spinner-grow text-success mx-1" role="status">
                                                            <span class="visually-hidden"></span>
                                                        </div>
                                                        <div class="spinner-grow text-danger" role="status">
                                                            <span class="visually-hidden"></span>
                                                        </div>
                                                        <div class="spinner-grow text-warning mx-1" role="status">
                                                            <span class="visually-hidden"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>`

                    $('hr').after(loading)

                    setTimeout(() => {
                        let alert = `<div class="success alert alert-success my-4 p-2 text-center" > Paiement effectué. <br/> Votre requête sera prise en compte dans un délai de 48h !</div>`

                        $('.phone').val("")

                        $(".preload").fadeOut("slow", () => {
                            $(alert).replaceAll(".success")
                            $(".btn-payment").attr("disabled", false)

                            setTimeout(() => {
                                window.location.replace("/");
                            }, 2000)

                        })
                    }, 3000);

                },


            })

        }
    })

})
