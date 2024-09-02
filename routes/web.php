<?php


use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(["middleware" => "web"], function ($router) {
    // Login User
    $router
        ->get("/login", [
            \App\Http\Controllers\Auth\LoginController::class,
            "index",
        ])
        ->name("login");
    $router
        ->post("/login", [
            \App\Http\Controllers\Auth\LoginController::class,
            "store",
        ])
        ->name("auth.login.store");

    // Register User
    $router
        ->get("/register", [
            \App\Http\Controllers\Auth\RegisterController::class,
            "index",
        ])
        ->name("auth.register");
    $router
        ->post("/register", [
            \App\Http\Controllers\Auth\RegisterController::class,
            "store",
        ])
        ->name("auth.register.store");

    // Verify Email
    $router
        ->get("/verify/email", [
            \App\Http\Controllers\Auth\VerifyController::class,
            "view",
        ])
        ->name("verification.notice");
    $router
        ->get("/verify/email/{id}/{hash}", [
            \App\Http\Controllers\Auth\VerifyController::class,
            "verify",
        ])
        ->name("verification.verify")
        ->middleware(["auth", "signed"]);
    $router
        ->post("/verify/email/resend", [
            \App\Http\Controllers\Auth\VerifyController::class,
            "resend",
        ])
        ->name("verify.resend")
        ->middleware(["auth", "throttle:5,1"]);

    // Password Reset
    $router
        ->get("/password/email", [
            \App\Http\Controllers\Auth\ResetController::class,
            "view"
        ])
        ->name("auth.password.email")
        ->middleware("guest");
    $router
        ->post("/password/send-email", [
            \App\Http\Controllers\Auth\ResetController::class,
            "SendEmail",
        ])
        ->name("auth.password.send.email")
        ->middleware("guest");
    $router
        ->get("/password/reset", [
            \App\Http\Controllers\Auth\ResetController::class,
            "reset"
        ])
        ->name("password.reset")
        ->middleware("guest");
    $router
        ->post("/password/reset", [
            \App\Http\Controllers\Auth\ResetController::class,
            "update"
        ])
        ->name("auth.password.update")
        ->middleware("guest");

});

Route::group(["prefix" => "admin", "middleware" => ["web"]], function ($router) {

        // Admin
        $router
            ->get("/", [
                \App\Http\Controllers\Admin\AdminController::class,
                "index",
            ])
            ->name("admin.index")
            ->middleware("auth");

        // Logout
//        $router
//            ->get(
//                "/logout",
//                \App\Http\Controllers\Admin\LogoutController::class
//            )
//            ->name("auth.logout")
//            ->middleware("auth");

        $router->resource("/users", \App\Http\Controllers\Admin\UserController::class);
    }
);

Route::get("/", [\App\Http\Controllers\Home\HomeController::class, "index"]);
