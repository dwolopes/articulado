 $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $(".btn-submit").click(function(e){

        e.preventDefault();


        var nome = $("input[name=nome]").val();

        // var password = $("input[name=password]").val();

        var email = $("input[name=email]").val();


        $.ajax({

           type:'POST',

           url:'/ajaxRequest',

           data:{name:nome, email:email},

           success:function(data){

              alert(data.success);

           }

        });



    });