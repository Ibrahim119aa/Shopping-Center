<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>This is Ajax</h1>
<table>
    <tr>
        <td>
            <input type="button" id="load-button" value="Load Data">
            <div id="Search">
                <label for="">Search</label>
                <input type="text" id="search" autocomplete="off">
            </div>
        </td>
    </tr>
    <tr>
        <td id="table-load">
            <table border="1" width="100%" cellpadding="10px">
                <tr>
                    <th>Id</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </table>

        </td>
    </tr>
</table> 
<select id="category" name="category">
  <option value="0">Please Select</option>
  <option value="50" data-value="akne">ACNE</option>
  <option value="11" data-value="rednessbumps">Redness / Bumps</option>
  <option value="15" data-value="sunspotsfreckles">Sunspots / Freckles</option>
  <option value="16" data-value="agingwrinkles">Aging / Wrinkles</option>
  <option value="17" data-value="dry-sensitive">Dry Sensitive</option>
</select>   
<script type="text/javascript" src="jquery.min.js">
    
</script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('#load-button').on('click',function(e)
        {
            $.ajax(
                {
                    url:'Fetch.php',
                    type:'POST',
                    success:function(data)
                    {
                        $('#table-load').html(data);

                    }

                }
            )
        })

        $(document).on('click','.Delete',function()
        {
            var std=$(this).data('id');
            var Element=this;   
            $.ajax({
                url:'Delete_data.php',
                type:'POST',
                data:{Id:std},
                success:function(data)
                { 
                 if(data==1)
                 {
                    $(Element).closest('tr').fadeOut();
                 }
                }
            })

        })
        $('#search').on('keyup',function()
        {
            var name=$(this).val();
            $.ajax({
                url:'Searching.php',
                type:'POST',
                data:{Name:name},
                success:function(data)
                {
                $('#table-load').html(data);
                }
            });
        })
        // $("#category").change(function () {
        //     var abc = $('option:selected',this).data("value");
        //     TransitionEvent(alert(abc));
        
        // }
        // )
        $('#category').hover(function()
        {
            $(this).css("background-color","pink");
        })

        $('#category').mouseover(function()
        {
            $(this).css("background-color","white");
        })
    })
</script>
</body>

</html>