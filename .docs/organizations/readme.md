# Organizations

The Organizations entity, has the follow fields:

- Name
- Rnc
- Email
- Phone

## Create new organization

```
    let data = {
        name: 'Jhon Doe Company',
        rnc: '444555666',
        email: 'jhondoecompany@test.co',
        phone: '416-963-3993'
    }

    axios.post('/organizations', data)
        .then(res =>{ 
            ...
        })
```

## List Organizations
    ``` 
        axios.get('/organizations').then( res=> { res. data})
    ```

## Update Organizations
    
    let data = {
        name: 'Jhon Doe Company',
        rnc: '444555666',
        email: 'jhondoecompany@test.co',
        phone: '416-963-3993'
    }

    axios.put('/organizations/1', data)
        .then(res =>{ 
            ...
        })

## Delete Organizations
    axios.delete('/organizations/1', data)