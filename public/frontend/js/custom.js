
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        loadcart();
        loadwishlist();
        function loadcart(){
            $.ajax({
                method: "GET",
                url: "/load-cart-count",
                success: function (response) {
                    $('.cart-count').html('')
                    $('.cart-count').html(response.count)
                }
            });
    
        }
        function loadwishlist(){
            $.ajax({
                method: "GET",
                url: "/load-wishlist-count",
                success: function (response) {
                    $('.wishlist-count').html('')
                    $('.wishlist-count').html(response.count)
                }
            });
    
        }
        
        

        //$('.increment-btn').click(function (e) { 
        $(document).on('click','.increment-btn', function (e) {
            e.preventDefault();
            
            var incr = $(this).closest('.menu_data').find('.qty-input').val();
            var value = parseInt(incr, 10);
            value = isNaN(value) ? 0 : value;
            if (value => 0) {
                value++;
                $(this).closest('.menu_data').find('.qty-input').val(value);
            }
        });

        //$('.decrement-btn').click(function (e) { 
        $(document).on('click','.decrement-btn', function (e) {
            e.preventDefault();
            
            var decr = $(this).closest('.menu_data').find('.qty-input').val();
            var value = parseInt(decr, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                $(this).closest('.menu_data').find('.qty-input').val(value);
            }
        });

        $('.addcart').click(function (e) { 
            e.preventDefault();
            var menu_id = $(this).closest('.menu_data').find('.menu_id').val();
            var menu_qty = $(this).closest('.menu_data').find('.qty-input').val();

            $.ajax({
                method: "POST",
                url: "/add-to-cart",
                data: {
                    'menu_id' : menu_id,
                    'menu_qty' : menu_qty,
                },
                success: function (response) {
                    loadcart()
                    swal(response.status)
                }
            });
        });

        $('.addwish').click(function (e) { 
            e.preventDefault();

            var menu_id = $(this).closest('.menu_data').find('.menu_id').val();

            $.ajax({
                method: "POST",
                url: "/add-to-wishlist",
                data: {
                    'menu_id' : menu_id,
                },
                success: function (response) {
                    loadwishlist()
                    swal(response.status)
                }
            });
        });

        //$('.delete-cart').click(function (e) { 
        $(document).on('click','.delete-cart', function (e) {
            
            e.preventDefault();
            var menu_id = $(this).closest('.menu_data').find('.menu_id').val();
            
            $.ajax({
                method: "POST",
                url: "delete-cart-item",
                data: {
                    'menu_id' : menu_id
                },
                success: function (response) {
                    //window.location.reload();
                    loadcart()
                    $('.cartitem').load(location.href + ' .cartitem')
                    swal("", response.status , "Success")
                }
            });
        });
        //$('.delete-wishlist').click(function (e) { 
        $(document).on('click','.delete-wishlist', function (e) {
            e.preventDefault();

       
            var menu_id = $(this).closest('.menu_data').find('.menu_id').val();
            
            $.ajax({
                method: "POST",
                url: "delete-wishlist-item",
                data: {
                    'menu_id' : menu_id
                },
                success: function (response) {
                   // window.location.reload();
                    
                    loadwishlist()
                    $('.wishitem').load(location.href + ' .wishitem')
                    swal("", response.status , "Success")
                }
            });
        });
        //$('.change-btn').click(function (e) { 
        $(document).on('click','.change-btn', function (e) {
            e.preventDefault();

            var menu_id = $(this).closest('.menu_data').find('.menu_id').val();
            var qty = $(this).closest('.menu_data').find('.qty-input').val();
            data = {
                'menu_id' : menu_id,
                'menu_qty' : qty,
            }
            $.ajax({
                method: "POST",
                url: "update-cart",
                data: data,
                success: function (response) {
                    
                    $('.cartitem').load(location.href + ' .cartitem');
                    //window.location.reload();
                }
            });
        });
        
    });