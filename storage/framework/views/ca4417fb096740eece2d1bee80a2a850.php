<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Email Verification</title>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">




<div class="bg-white max-w-md  rounded-md shadow-md mt-6">
    <!-- Header Section -->
    <div class="w-full bg-white max-w-md mt-3  border-b-2 border-slate-400">
        <div class="flex items-center justify-center mb-3">
            <img src="<?php echo e(asset('img/itodo-logo.png')); ?>" alt="Logo" class="w-60 h-16">
        </div>
    </div>

    <!-- Content Section -->
    <div class="p-6">
        <h1 class="text-2xl font-semibold text-center mb-3">Email Verification</h1>
        <p class="mb-6">Please use the following verification code to verify your email address:</p>
        <div class="bg-gray-200 p-4 rounded-md text-center text-gray-700 font-bold" style="letter-spacing:1.5em">
            <?php echo e($otp); ?> 
        </div>
        
        <p class="mt-4 text-sm text-gray-500">If you did not request this verification, please ignore this email.</p>
        <p class="mt-1 text-sm text-gray-500">or contact us on info@itodo.com</p>
    </div>
    
    
    <!-- Footer Section -->
    <div class="w-full bg-white py-4 mt-6 border-t-2 border-slate-400">
        <div class="max-w-3xl mx-auto px-4 text-center text-gray-500 text-sm">
            &copy; <?php echo e(date('Y')); ?> iTodo App. All rights reserved.
        </div>
    </div>    
</div>



</body>
</html>
<?php /**PATH C:\MY FILES\LARAVEL\PROJECT\iTodoApp\resources\views/email/accountverifyotp.blade.php ENDPATH**/ ?>