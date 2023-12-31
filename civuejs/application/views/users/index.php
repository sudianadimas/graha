<ul class="nav justify-content-left bg-white text-dark">
  <li class="nav-item">
        <a class="nav-link text-dark h4" href="<?php echo base_url();?>user"><img src="<?php echo base_url();?>assets/img/LOGO.PNG" width="50" height="50">GRAHA AQUILA -- DATA BASE RUMAH</a>
  </li>

 </ul>
  <div id="app">
   <div class="container">
    <div class="row">
        <transition
                enter-active-class="animated fadeInDown"
                     leave-active-class="animated fadeOutUp">
                     <div class="notification is-success text-center px-5 top-middle" v-if="successMSG" @click="successMSG = false">{{successMSG}}</div>
            </transition>
        <div class="col-md-12">
           <table class="table bg-white my-3">
               <tr>
                   <td> <button class="btn btn-default btn-block" @click="addModal= true">TAMBAH</button></td>
                   <td><input placeholder="Search"type="search" class="form-control" v-model="search.text" @keyup="searchUser" name="search"></td>
               </tr>
           </table>
            <table class="table is-bordered is-hoverable">
               <thead class="text-white bg-primary" >
                
                <th class="text-white">ID</th>
                <th class="text-white">NOMER RUMAH</th>
                <th class="text-white">NAMA PENGHUNI</th>
                <th class="text-white">STATUS</th>
                <th class="text-white">NOMER TELPON</th>
                <th class="text-white">KETERANGAN</th>
                <th class="text-white">GENDER</th>
                <th colspan="2" class="text-center text-white">Action</th>
                </thead>
                <tbody class="table-light">
                    <tr v-for="user in users" class="table-default">
                        <td>{{user.id}}</td>
                        <td>{{user.firstname}}</td>
                        <td>{{user.lastname}}</td>
                        <td>{{user.email}}</td>
                        <td>{{user.contact}}</td>
                        <td>{{user.address}}</td>
                        <td>
                        <img :src="imgGender(user.gender)"  width='45' height="45">
                        </td>
                        <td><button class="btn btn-info fa fa-edit" @click="editModal = true; selectUser(user)"></button></td>
                        <td><button class="btn btn-danger fa fa-trash" @click="deleteModal = true; selectUser(user)"></button></td>
                    </tr>
                    <tr v-if="emptyResult">
                      <td colspan="9" rowspan="4" class="text-center h1">No Record Found</td>
                  </tr>
                </tbody>
                
            </table>
            
        </div>
  
    </div>
     <pagination
        :current_page="currentPage"
        :row_count_page="rowCountPage"
         @page-update="pageUpdate"
         :total_users="totalUsers"
         :page_range="pageRange"
         >
      </pagination>
</div>
<?php include 'modal.php';?>

</div>

