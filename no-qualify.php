<?php
 /** !!_SITE_MONITOR_FALSE_!! */
 /** !!_SITE_MONITOR_FB_!! */

 $domainName =' Golden Years ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo (($domainName == "Benefit Checker Help") ? "Benefits For Seniors" : $domainName) ?>

    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<body>
    <a href="https://cdn.sppoints.xyz/click" class="hidden" id="rtRef"></a>
    <div class="bg-red-700 mx-auto text-center py-2">
        <h1 class="text-xl text-white font-bold mx-4 sm:mx-0">
         Seniors On Medicare Can Get Hundreds In Savings. Tap Below To Qualify!
        </h1>
    </div>
    <div class="max-w-md mx-auto mt-16 p-6 rounded-lg shadow-lg bg-white">
        <div class="mx-auto mb-4">
            <img src="./assets/images/angry-svgrepo.svg" alt="Sad Emoji" class="h-16 w-16 mx-auto mb-4">
        </div>
        <h2 class="text-2xl font-bold text-center mb-4">Sorry, You Have Not Qualified</h2>
        <p class="text-gray-700 text-center">We regret to inform you that you have not met the qualification criteria for this offer.</p>
        <p class="text-gray-700 text-center">Please check back later for any updates </p>
        <div class="text-center mt-8">
            <a href="javascript:history.back()" class="inline-block px-4 py-2 bg-red-700 text-white rounded hover:bg-red-600">Back</a>
        </div>
    </div>
</body>
</html>