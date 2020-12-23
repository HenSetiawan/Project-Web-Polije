
//delete mitra
const btnDelMitraItems=document.querySelectorAll('.btn-delete-mitra');
btnDelMitraItems.forEach(btnDelMitra=>{
  btnDelMitra.addEventListener('click',async()=>{
    const url=btnDelMitra.dataset.url;
    const isAlert=await swal("Apakah anda ingin menghapus data ini?", {
         buttons: ["Tidak", "Iya"],
       });
 
       if(isAlert){
           location.replace(url);
       }
 })
})



//update mitra
const btnUpdateItems=document.querySelectorAll('.btn-update-mitra');
btnUpdateItems.forEach(btnUpdate=>{
  btnUpdate.addEventListener('click',async ()=>{
    const url=btnUpdate.dataset.url;
  
   const response=await fetch(url);
   const result=await response.json();
  
    document.getElementById('name').value=result.nama;
    document.getElementById('alamat').value=result.alamat;
    document.getElementById('noKtp').value=result.id_pemilik;
    document.getElementById('email').value=result.email;
    document.getElementById('noHandphone').value=result.no_hp;

  
  
    document.getElementById('btn-submit-mitra').setAttribute('name','updateMitra')
  
  
   console.log(result)
  
  })
})

//tambah mitra
const btnAdd=document.getElementById('btn-tambah-mitra');
if(btnAdd!=null){
btnAdd.addEventListener('click',()=>{

  document.getElementById('name').value='';
  document.getElementById('alamat').value='';
  document.getElementById('noKtp').value='';
  document.getElementById('email').value='';
  document.getElementById('noHandphone').value='';


  document.getElementById('btn-submit-mitra').setAttribute('name','submitMitra')

})
}

