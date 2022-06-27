   <!-- Contact Start -->
   <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Registeration</span></h2>
        </div>
        <div class="row px-xl-12 ">
            <div class="col-lg-5 mb-5 offset-md-4">
            <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">Sr. No.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                 
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): 
                $count =1;
                ?>
            <tr>
              
                <td><?php echo $count; ?></td>
                <td><?php echo h($user->fullName) ?></td>
                <td><?php echo h($user->email) ?></td>
                
                <td class="actions">
                    Edit
                   </td>

            </tr>
            <?php 
            $count++;
        endforeach; ?>
        </tbody>
    </table>
            </div>
        </div>
    </div>
    <!-- Contact End -->