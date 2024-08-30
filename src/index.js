// app.js

// Đây là một ví dụ đơn giản với một số lỗi code
function sayHello(name) {
    console.log("Hello, " + name); // Lỗi tiềm ẩn: có thể không kiểm tra đầu vào
}

function addNumbers(a, b) {
    return a + b; // Có thể không kiểm tra kiểu dữ liệu
}

sayHello("World");
console.log(addNumbers(5, "10")); // Lỗi: phép cộng giữa số và chuỗi
