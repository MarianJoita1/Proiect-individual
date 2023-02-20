$(document).ready(function() {
    $('.users').on('click', '.edit', function(e) {
        e.preventDefault();

        var a = $(this);

        $('#addEditUser').prop('action', a.attr('href'));

        $.ajax({'url': a.attr('href'),
            'data': {
                'get': 1
             },
            'dataType': 'json',
            'type': 'POST',
            'success': function (r) {
                $('#addEditUser input[type="text"]').val('');
                $('#addEditUser select[name="status"] option').removeAttr('selected');
                $('#addEditUser select[name="type"] option').removeAttr('selected');
                $('#addEditUser input[name="email"]').val(r.email);
                $('#addEditUser select[name="type"] option').each(function () {
                   if ($(this).val() == r.type) {
                        $(this).attr('selected', 'selected');
                    }
                });
                $('#addEditUser select[name="status"] option').each(function () {
                   if ($(this).val() == r.status) {
                        $(this).attr('selected', 'selected');
                    }
                });
                $('#addEditUser').modal('show');
            }
        });
    });
    $('.cars').on('click', '.edit', function(e) {
        e.preventDefault();

        var a = $(this);

        $('#addEditCar').prop('action', a.attr('href'));

        $.ajax({'url': a.attr('href'),
            'data': {
                'get': 1
             },
            'dataType': 'json',
            'type': 'POST',
            'success': function (r) {
                console.log(a.attr('href'));
                $('#addEditCar input[type="text"]').val('');
                $('#addEditCar select[name="status"] option').removeAttr('selected');
                $('#addEditCar select[name="status"] option').each(function () {
                    if ($(this).val() == r.status) {
                        $(this).attr('selected', 'selected');
                    }
                });
                $('#addEditCar select[name="brand_id"] option').removeAttr('selected');
                $('#addEditCar select[name="brand_id"] option').each(function () {
                    if ($(this).val() == r.status) {
                        $(this).attr('selected', 'selected');
                    }
                });
                $('#addEditCar select[name="model_id"] option').removeAttr('selected');
                $('#addEditCar select[name="model_id"] option').each(function () {
                    if ($(this).val() == r.status) {
                        $(this).attr('selected', 'selected');
                    }
                
                });
                $('#addEditCar input[name="horse_power"]').val(r.hp);
                $('#addEditCar input[name="cc"]').val(r.cc);
                $('#addEditCar input[name="dors"]').val(r.dors);
                $('#addEditCar input[name="color"]').val(r.color);
                $('#addEditCar input[name="number"]').val(r.number);
                $('#addEditCar input[name="price"]').val(r.price);
                $('#addEditCar').modal('show');
            }
        });
    });

  $('.cars-front').on('click', '.add-to-wishlist', function(e) {
    e.preventDefault();
    var a = $(this);

    if ($(this).find('i').hasClass('fa-heart-o')) {
      $(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
      $(this).find('span').html('Scoate de la favorite!');

      $.ajax({'url': a.attr('href')+'&add=1',
          'type': 'GET',
          'success': function (r) {

          }
      });
    }
    else {
      $(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
      $(this).find('span').html('Adauga la favorite!');

      $.ajax({'url': a.attr('href')+'&remove=1',
          'type': 'GET',
          'success': function (r) {

          }
      });
    }
  });

  $('.favorites').on('click', '.remove-item', function(e) {
    e.preventDefault();
    var a = $(this);

    $.ajax({'url': a.attr('href')+'&remove=1',
        'type': 'GET',
        'success': function (r) {
          a.parents('.row').remove();
          console.log(r);
        }
    });
  });
  $('.messageForm').on('click', '.send-button', function(e){
    e.preventDefault();
    var a = $(this);
    var input = document.getElementById('messageInput');
    $.ajax({'type': "POST", 'url':a.attr('href'),
    'data':{send: input.value},
    'success': function (r) {
        const textVar = document.createTextNode(input.value);
        input.value = "";
        var messages = document.getElementById('messages-content');
        var message = document.createElement('p');
        message.appendChild(textVar);
        message.classList.add('message');
        message.classList.add('message-personal');
        messages.appendChild(message);
    }
    })
  })

  $('.profiles').on('click', '.leaderboard__profile', function(e){
    e.preventDefault();
    var a = $(this);
    console.log(a[0])
    var personId = a[0].querySelector('.conv-id').textContent;
    console.log(personId);
    $.ajax({'type': "POST", 'url':a.attr('href'),
    'data':{person: personId},
    'success': function (r) {
        
    }
    })
  })


    if(document.getElementById('selBrand').value == 0) {
        document.getElementById('select-model').disabled = true;
    } else {
        document.getElementById('select-model').disabled = false;
    }

    var element = document.getElementById('chat-window');
    element.scrollTop = element.scrollHeight;

});
