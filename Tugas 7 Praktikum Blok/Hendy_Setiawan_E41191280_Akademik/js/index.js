const btnDelete=document.querySelectorAll('.btnDelete');
btnDelete.forEach(btnItem=>{
    btnItem.addEventListener('click',async (event)=>{
        event.preventDefault();
      let confirm=await swal("Apakah anda ingin menghapus data ini?", {
            buttons: ["Tidak !", true],
          });

          const url=btnItem.dataset.url;
          if(confirm){
              location.replace(url)
          }
    })
})



// ajax update
const btnUpdate=document.querySelectorAll('.btnUpdate');
btnUpdate.forEach(btnItem=>{
    btnItem.addEventListener('click',async (event)=>{
        const id=btnItem.dataset.id;
        formData=new FormData();
        formData.append('id',id);

        const data= await fetch('http://localhost/akademik/upstudent.php',
        {
            method:"POST",
            body:formData,
        }); 

        const stundent=await data.json();
        
        const nim=document.getElementById('nim');
        const nama=document.getElementById('nama');
        const agama=document.getElementById('agama');
        const username=document.getElementById('username');
        const inputId=document.querySelector('.input-id')


        inputId.value=stundent.id;
        nim.value=stundent.nim;
        nama.value=stundent.nama;
        agama.value=stundent.agama;
        username.value=stundent.username;

    })
})



// ajax search
const keywordInput=document.querySelector('.keyword');
keywordInput.addEventListener('keyup',async (event)=>{
    
    const keyword=keywordInput.value;
    const formData=new FormData();
    formData.append('keyword',keyword);

    const response=await fetch('http://localhost/akademik/search.php',{
        method:"POST",
        body:formData
    })

    const data=await response.text();

    const tableMhs=document.querySelector('.table-mhs');
    tableMhs.innerHTML=data;

})






