import home from '../components/home.vue'
import products from '../components/products.vue'
import brands from '../components/brands.vue'
import cart from '../components/cart.vue'
import contact from '../components/contact.vue'

//ADMIN COMPONENTS
import addcat from '../components/admin/category/addcat.vue'
import mancat from '../components/admin/category/mancat.vue'
import editcat from '../components/admin/category/editcat.vue'

import addpro from '../components/admin/products/addpro.vue'
import manpro from '../components/admin/products/manpro.vue'
import editpro from '../components/admin/products/editpro.vue'

export const routes=[
{ path:'/home', component: home},
{ path:'/products', component: products},
{ path:'/brands', component: brands},
{ path:'/cart', component: cart},
{ path:'/contacts', component: contact},

//ADMIN ROUTES
{path:'/add-category', component: addcat},
{ path:'/manage-category', component: mancat},
{ path:'/edit-category/:id', component: editcat},

{path:'/add-product', component: addpro},
{ path:'/manage-product', component: manpro},
{ path:'/edit-product/:id', component: editpro},



];


