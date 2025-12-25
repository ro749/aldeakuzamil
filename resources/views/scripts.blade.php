@push('script-includes')
<script src="js/vendors.js"></script>
<script src="js/designesia.js"></script>
<script src="js/validation-booking.js"></script>
<script src="js/swiper.js"></script>
<script src="js/custom-swiper-2.js"></script>
@endpush

@push('scripts')
<script>
    var data = @json($unit);
    var unit_price = 0;
    $(function () {
      $("#date").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      }).datepicker('update', new Date());
    });
    @if(empty($unit))
    $(document).on('selected-unit', function(e, raw_data) {
        data = raw_data["unit"];
        selected_unit_id = data["id"];
        unit_price = data["price"];
        data["price"] *= $('#fill_1_0').val();
        @stack('before_fill') 
        fill_data();
    });
    @else
    unit_price = data["price"];
    @stack('before_fill') 
    fill_data();
    @endif
    function fill_data() {
        @stack('fill')
    }
    console.log('working');
    for(var i=1;i<6;i++){
        $('#fill_'+i+'_0').val(1);
        $('#fill_'+i+'_0').on('input', function(e){
            if(e.target.value!=''){
                change_all(e.target.value);
            }
        });
    }
    function change_all(new_value){
        for(var i=1;i<6;i++){
            $('#fill_'+i+'_0').val(new_value);
        }
        console.log('unit_price',unit_price);
        data['price'] = unit_price*new_value;
        fill_data();
    }
</script>
@endpush
@if(isset($imp))
@include('listing-utils::ImageMapPro.image-map-pro',['imp'=>$imp])
@endif
@stack('script-includes')
@stack('scripts')