<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            html, body{
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            table,th, td{
                border: 1px solid black;
            }
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

    </head>
    <body>
        <div style= "height= 100vh; margin: 3rem; display: grid; place-item:center">
            <table>
                <tbody>
                    <tr>
                        <th>Avatar</th>
                        <th>Name</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td><img src="{{$user->avatar_url}}" alt="user avatar" width="100" height="100"></td>
                        <td><p>{{$user->login}}</p></td>
                        <td><button class="btn btn-primary" onclick="redirect('{{$user->login}}')" data-bs-toggle="modal" data-bs-target="#userDetailsModal" data-user="'{{$user->login}}'">Ver más info</button></td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
            
            <!-- Modal -->
            <div class="modal fade" id="userDetailsModal" tabindex="-1" aria-labelledby="userDetailsModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="display: flex;justify-content:center;align-items:center">
                    <div class="modal-content" style="width: fit-content;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="userDetailsModalLabel">Datos del usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>  
                        <!--carga por JS de forma dinámica-->
                        <div id="userDetailsModalBody" class="modal-body text-center">
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>                            
                        </div>
                    </div>
                </div>
            </div>
            <!--End of modal-->
        </div>
    
        <script>
            function redirect(login){
                const body = {username: login };
                $.ajax({
                    method: 'POST',
                    url:'/userDetails',
                    headers: {
                        'x-CSRF-TOKEN': document.getElementsByTagName("meta")[2].content,
                        'Content-Type': 'application/json'
                    },
                    data: JSON.stringify(body),
                    success: (response) => {
                        $("#userDetailsModalBody").empty();
                        $("#userDetailsModal").modal({show: true});
                                      
                        const parsedResponse = JSON.parse(response);
                        //avatar_url
                        //created_at
                        //company
                        //email
                        //followers
                        //following
                        //location
                        //login
                        //name
                   
                        const avatarUrl = parsedResponse.avatar_url ?? 'Does not specify';
                        const createdAt = Date(parsedResponse.created_at) ?? 'Does not specify';
                        const company = parsedResponse.company ?? 'Does not specify';
                        const email = parsedResponse.email ?? 'Does not specify';
                        const followers = parsedResponse.followers ?? 'Does not specify';
                        const following = parsedResponse.following ?? 'Does not specify';
                        const location = parsedResponse.location ?? 'Does not specify';
                        const login = parsedResponse.login ?? 'Does not specify';
                        const name = parsedResponse.name ?? 'Does not specify';

                        const table = `<table>
                                            <tbody>
                                                <tr>
                                                    <th>Avatar</th>
                                                    <th>Creado</th>
                                                    <th>Company</th>
                                                    <th>Email</th>
                                                    <th>Followers</th>
                                                    <th>Following</th>
                                                    <th>Location</th>
                                                    <th>Username</th>
                                                    <th>Name</th>
                                                </tr>
                                                <tr>
                                                    <td><img src="${avatarUrl}" alt="avatar image" width="100"/></td>
                                                    <td><p>${createdAt}</p></td>
                                                    <td><p>${company}</p></td>
                                                    <td><p>${email}</p></td>
                                                    <td><p>${followers}</p></td>
                                                    <td><p>${following}</p></td>
                                                    <td><p>${location}</p></td>
                                                    <td><p>${login}</p></td>
                                                    <td><p>${name}</p></td>
                                                 
                                                </tr>
                                            
                                            </tbody>
                                        </table>`;
                        
                        
                        $('#userDetailsModalBody').append(table);
                        
                        
                        // const avatarUrl = parsedResponse.avatar_url;
                        // const createdat = new date ()

                        // const company = parsedResponse.company ?? 'Does not specify';
                        // const email = parsedResponse.email ?? 'Does not specify';
                        // const followers = parsedResponse.followers ?? 'Does not specify';
                        // const following = parsedResponse.following ?? 'Does not specify';
                        // const location = parsedResponse.location ?? 'Does not specify';
                        // const login = parsedResponse.login ?? 'does not specify';
                        // const name = parsedResponse.name ?? 'Does not specify';

                        /* <tr>
                            
                            <td><p>${createdAt}</p></td>
                            <td><p>${company}</p></td>
                            <td><p>${email}</p></td>
                            <td><p>${followers}</p></td>
                            <td><p>${following}</p></td>
                            <td><p>${location}</p></td>
                            <td><p>${login}</p></td>
                            <td><p>${name}</p></td>
                        </tr> */
                    }
                    /* error: (response) => {
                        alert('An error ocurred, please try again in a few minutes.');
                    } */
                })
            
            }
        </script>
    </body>
</html>
