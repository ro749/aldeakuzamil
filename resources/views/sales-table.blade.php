<!DOCTYPE html>
<html>
<head>
    @include('listing-utils::head')
    @stack('styles')
    <style>
        .filter-on{
            background-color: gray;
        }
        #RegisterSale-fields{
          display: grid;
          grid-template-columns: 1fr 1fr;
          column-gap: 2rem;
          padding: 1rem;
        }
        #RegisterSale-button{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        #RegisterSale-button button{
            background-color: var(--neutral-900);
            color: #fff;
        }
    </style>
</head>


<body>
    @include(config('overrides.views.header-admin'))
    <div style="height: 60px"></div>
    <x-smartForm :form="$form" />
    <div style="padding: 1.5rem">
    @include('sharedutils::components.tables.smartTable', ['table' => $table])
    </div>
    @push('scripts')
    <script>
        $(document).on('change','#asesor',function(){
            $.ajax({
                url: "{{ route('clients-asesor') }}",
                type: "GET",
                dataType: "json",
                data: {
                    asesor: $(this).val()
                },
                success: function (data) {
                    $('#client').empty();
                    $.each(data, function (key, value) {
                        $('#client').append(new Option(value.name, value.id));
                    });
                    $('#client').val(null).trigger('change');
                }
            })
        });
    </script>
    @endpush
    @stack('script-includes')
    @stack('scripts')
</body>
</html>