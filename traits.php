<?php 
// Traits ko use karke aap common code ko multiple classes mein reuse kar sakte hain, bina inheritance ka use kiye.
// Ek class multiple traits ko use kar sakti hai, jo multiple inheritance ka problem solve karta hai.
// Agar do traits mein same naam ke methods hain aur wo dono traits ek class mein use ho rahi hain, to PHP mein conflict resolution mechanisms hain jinki madad se aap decide kar sakte hain kaunsa method use hoga.
// Agar do traits mein same naam ke methods hain, to aap insteadof aur as keywords ka use karke conflict resolve kar sakte hain.

trait A {
    public function sayHello() {
        echo "Hello from Trait A\n";
    }
}

trait B {
    public function sayHello() {
        echo "Hello from Trait B\n";
    }
}

class MyClass {
    use A, B {
        A::sayHello insteadof B; // Use A's sayHello instead of B's
        B::sayHello as sayHelloFromB; // Alias B's sayHello method
    }
}

$obj = new MyClass();
$obj->sayHello(); // Output: Hello from Trait A
$obj->sayHelloFromB(); // Output: Hello from Trait B

?>