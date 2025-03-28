### **Project Summary: Laravel Feeds & User Registration System**  

This is a **Laravel-based web application** that includes **Feeds Management** and **User Registration** functionalities. The project follows the **MVC (Model-View-Controller) pattern** and uses **Blade templating, routing, form validation, and Bootstrap for styling**.  

---

### **🔹 Features Used:**

#### **1️⃣ Feeds Management (CRUD)**
- Users can **Create, Read, Update, and Delete (CRUD) feeds**.
- Uses `@extends('layout')` for a consistent page structure.
- Displays a success message using `@session("success")`.
- Routes used:
  - `feeds.create` → Create a new feed.
  - `feeds.show` → View a feed.
  - `feeds.edit` → Edit a feed.
  - `feeds.destroy` → Delete a feed.
- Uses **CSRF protection** and **DELETE method spoofing** for security.

---

#### **2️⃣ User Registration**
- Users can **register with Full Name, Email, and Password**.
- Uses Laravel’s **form validation** to handle errors:
  - Displays errors using `$errors->any()`.
  - Displays session messages for success/error.
- Routes used:
  - `registration.post` → Handles form submission.
- Uses `@csrf` for **security against CSRF attacks**.
- Form styled with **Bootstrap** for a clean UI.

---

### **🔹 Technologies Used**
✅ Laravel (PHP Framework)  
✅ Blade Template Engine  
✅ Bootstrap (for UI styling)  
✅ CSRF Protection  
✅ Form Validation  

This system provides **a structured and secure way** for users to **register and manage feeds**. 🚀
