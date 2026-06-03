<div>
    <h2 class="h3">Tous les utilisateurs</h2>
    <div class="table-responsive overflow-y-auto" style="height: 25vh;">
        <table class="table">
            <thead class="sticky-top">
                <tr>
                    <th></th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <!--
                https://dummyjson.com/users?limit=300&select=id,firstName,lastName,email,image
                --->
                <?php
                $url = 'https://dummyjson.com/users?limit=300&select=id,firstName,lastName,email,image';
                $raw = @file_get_contents($url);
                $data = json_decode($raw);
                $total = $data->total;
                $skip = $data->skip;
                $limit = $data->limit;
                $users = $data->users;
                foreach($users as $user){
                    /*
                    Exercice : 
                    remplir le tableau
                    y ajouter un lien avec les classes (btn-small)
                        lien target user-card
                    */
                ?>
                <tr>
                    <td>image</td>
                    <td>firstName</td>
                    <td>lastName</td>
                    <td>email</td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>