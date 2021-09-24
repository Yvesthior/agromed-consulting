<?php
use Illuminate\Http\Request;
use App\Models\TestCovid1;
use Illuminate\Support\Facades\Http;

Route::view('/', 'welcome');
Auth::routes(['register' => false]);

Route::get('/rendez-vous', 'TestCovidControllerRV@rdv')->name('rendez-vous');
Route::get('/rvsuccess', 'TestCovidControllerRV@success')->name('succes');
Route::post('/rdv', function (Request $request) {
    $data = new TestCovid1();
    $data->date_rendez_vous = $request['date_rendez_vous'];
    $data->date_voyage = $request['date_voyage'];
    $data->nom = $request['nom'];
    $data->prenoms = $request['prenoms'];
    $data->nom_complet = $request['prenoms'] . ' ' . $request['nom'];
    $data->sexe = $request['sexe'];
    $data->telephone = $request['telephone'];
    $data->date_naissance = $request['date_naissance'];
    $data->email = $request['email'];
    $data->adresse = $request['adresse'];
    $data->heure_rendez_vous = $request['heure_rendez_vous'];
    $data->destination = $request['destination'];
    $data->heure_voyage = $request['heure_voyage'];
    $data->message = $request['message'];
    $data->statut = "Programmé";
/* 
    $response = Http::withHeaders([
        'X-First' => 'foo',
        'X-Second' => 'bar'
    ])->post('http://example.com/users', [
        'name' => 'Taylor',
    ]); */

    $login= Http::post('http://41.219.0.108/sms-api-itca/public/api/login?', [
        'email' => 'yvesthior@gmail.com',
        'password' => 'Itca@agomed123!',
    ]);
    
    $token = json_decode($login->body());
    $bearer = $token->bearer_token;
    $sexeS = $data->sexe === "Homme" ? "Mr" : "Mme" ;
   
    $response = Http::accept('application/json')->get('http://41.219.0.108/sms-api-itca/public/api/send?');
    $response = Http::withToken($bearer)
    ->post('http://41.219.0.108/sms-api-itca/public/api/send?', [
        'from' => 'Agromed',
        'to' => $data->telephone,
        'message' => 'Bonjour '. $sexeS. ' '.  $data->nom_complet. ',
Votre demande de rendez-vous pour la date du '. $data->date_rendez_vous . ' a bien été prise en compte, vous serez contacté par un préleveur pour la suite. 
Bien à vous,
Agromed Consulting'
    ]);


    $data->save();

    // var_dump($response->body());
    return redirect()->route('succes');/*  */
    })->name('rdv');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', '2fa', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Test Covid
    Route::delete('test-covids/destroy', 'TestCovidController@massDestroy')->name('test-covids.massDestroy');
    Route::post('test-covids/parse-csv-import', 'TestCovidController@parseCsvImport')->name('test-covids.parseCsvImport');
    Route::post('test-covids/process-csv-import', 'TestCovidController@processCsvImport')->name('test-covids.processCsvImport');
    Route::resource('test-covids', 'TestCovidController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth', '2fa']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
        Route::post('profile/two-factor', 'ChangePasswordController@toggleTwoFactor')->name('password.toggleTwoFactor');
    }
});
Route::group(['as' => 'frontend.', 'namespace' => 'Frontend', 'middleware' => ['auth', '2fa']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Test Covid
    Route::delete('test-covids/destroy', 'TestCovidController@massDestroy')->name('test-covids.massDestroy');
    Route::resource('test-covids', 'TestCovidController');

    Route::get('frontend/profile', 'ProfileController@index')->name('profile.index');
    Route::post('frontend/profile', 'ProfileController@update')->name('profile.update');
    Route::post('frontend/profile/destroy', 'ProfileController@destroy')->name('profile.destroy');
    Route::post('frontend/profile/password', 'ProfileController@password')->name('profile.password');
    Route::post('profile/toggle-two-factor', 'ProfileController@toggleTwoFactor')->name('profile.toggle-two-factor');
});
Route::group(['namespace' => 'Auth', 'middleware' => ['auth', '2fa']], function () {
    // Two Factor Authentication
    if (file_exists(app_path('Http/Controllers/Auth/TwoFactorController.php'))) {
        Route::get('two-factor', 'TwoFactorController@show')->name('twoFactor.show');
        Route::post('two-factor', 'TwoFactorController@check')->name('twoFactor.check');
        Route::get('two-factor/resend', 'TwoFactorController@resend')->name('twoFactor.resend');
    }
});
