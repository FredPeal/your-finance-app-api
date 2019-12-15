# Sign up API

**Before start with this API on your header Content-Type, Accept must be application/json**

## Fields 
- First Name **first_name**
- Last Name **last_name**
- Name **name**
- Email **email**
- Password **password**
- Phone **phone**

### Request

```
axios({
    url: '/sign-up',
    method: 'POST',
    data: {
        first_name:'Jhon',
        last_name: 'Doe',
        name:'jhon',
        email:'jhon@doe.com',
        password: 'YourStrongPassword',
        phone:'+1 464-626-6369'
    }
})
```