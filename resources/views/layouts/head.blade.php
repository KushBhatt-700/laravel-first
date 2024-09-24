<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">
    
    <!-- title of site -->
    <title>CarVilla</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Include jQuery (make sure it's included before using it) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Check if there's a selected language stored in localStorage
            if (localStorage.getItem('selectedLang')) {
                // Update the text of the first <a> with the stored language
                $('#navbarDropdown').text(localStorage.getItem('selectedLang'));
            }
    
            // Listen for click events on the dropdown items
            $('.dropdown-item').on('click', function(event) {
                // Prevent default action temporarily to update text
                event.preventDefault();
                
                // Get the language code and URL from the clicked item
                var selectedLang = $(this).data('lang');
                var targetUrl = $(this).attr('href');
                
                // Update the main dropdown toggle text with the selected language
                $('#navbarDropdown').text(selectedLang);
                
                // Store the selected language in localStorage
                localStorage.setItem('selectedLang', selectedLang);
                
                // Redirect to the selected URL
                window.location.href = targetUrl;
            });
        });
    </script>
</head>