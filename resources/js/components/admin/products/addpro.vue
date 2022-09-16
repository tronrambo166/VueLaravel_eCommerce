<template>

<div class="text-center  py-4 card">

 <h3  class="my-4  h3  font-weight-bold">Add Categories  </h3>	
		   
	<form class="form-group" @submit.prevent="addCategory" @keydown="form.onKeydown($event)">
    Name: <input class="form-group" v-model="form.pro_name" type="text" name="pro_name" placeholder="Product Name">
    <div style="color:red;" v-if="form.errors.has('pro_name')" v-html="form.errors.get('pro_name')" /> <br>

     Desc: <input class="form-group" v-model="form.desc" type="text" name="desc" placeholder="desc">
    <div style="color:red;" v-if="form.errors.has('desc')" v-html="form.errors.get('desc')" /> <br>

     Cat Id:  <input class="form-group"  v-model="form.cat_id" type="number" name="cat_id" >
    <div style="color:red;" v-if="form.errors.has('catName')" v-html="form.errors.get('catName')" /> <br>

     Brand Id:  <input class="form-group"  v-model="form.brand_id" type="number" name="catName" >
    <div style="color:red;" v-if="form.errors.has('catName')" v-html="form.errors.get('catName')" /> <br>

     Price:  <input class="form-group"  v-model="form.price" type="number" name="catName" >
    <div style="color:red;" v-if="form.errors.has('catName')" v-html="form.errors.get('catName')" /><br>

     Qty:  <input v-model="form.qty" type="number" name="qty" >
    <div style="color:red;" v-if="form.errors.has('catName')" v-html="form.errors.get('catName')" /><br>

   
   
    <h5  class="my-4  h6   font-weight-bold"> Status  </h5>	
    <input type="radio" class="form-check-input" id="inactive" value="0" v-model="form.status" />
    <label  for="inactive" > Inactive </label>

      <input type="radio" class="mx-3 form-check-input" id="active" value="1" v-model="form.status" />
    <label  for="active" class="mx-5 " > Active </label>


    
    <button type="submit" :disabled="form.busy" class="btn btn-primary">
     Save
    </button>
  </form>
			
</div>

</template>

<script> 

export default {
	data: () =>({
	form: new Form({
	pro_name:'',
	desc:'',
	cat_id:'',
	brand_id:'',
	price:'',
	qty:'',
	image:'',
	status:0
	})
	}),
	methods:{
	async addCategory(){
	const response = await this.form.post('http://localhost/laravel_projects/Vue_eCommerce/public/admin/save-product');
	console.log(response.data);
  toastr.success(response.data.success, { timeout:5000 });
 //this.$router.push('/manage-category');

	}
	}
}
</script>