package main

import (
	"fmt"
	"go/views/config"
	"html/template"
	"log"
	"net/http"

	_ "github.com/go-sql-driver/mysql"
)

type User struct {
	Id_user  int
	Nama     string
	Email    string
	Password string
}

type Produk struct {
	Id_produk      int
	Id_user        int
	Nama_produk    string
	Kategori       string
	Harga          int
	Diskon         int
	Potongan_harga int
	Promosi        string
	Deskripsi      string
}

func dbc() {
	db, e := config.MySQL()

	if e != nil {
		log.Fatal(e)
	}

	eb := db.Ping()
	if eb != nil {
		panic(eb.Error())
	}

	fmt.Println("Succes")
}

func home(w http.ResponseWriter, r *http.Request) {
	var data = ""
	var tmpl = template.Must(template.ParseFiles(
		"views/index.php",
		"views/layout/_app.php",
		"views/layout/_foapp.php",
	))
	tmpl.ExecuteTemplate(w, "index", data)
}

func asset() {
	http.Handle("/static/",
		http.StripPrefix("/static/",
			http.FileServer(http.Dir("assets"))))
	http.Handle("/css/",
		http.StripPrefix("/css/",
			http.FileServer(http.Dir("assets/css/"))))
	http.Handle("/fonts/",
		http.StripPrefix("/fonts/",
			http.FileServer(http.Dir("assets/fonts/"))))
	http.Handle("/images/",
		http.StripPrefix("/images/",
			http.FileServer(http.Dir("assets/images/"))))
	http.Handle("/js/",
		http.StripPrefix("/js/",
			http.FileServer(http.Dir("assets/js/"))))
	http.Handle("/sass/",
		http.StripPrefix("/sass/",
			http.FileServer(http.Dir("assets/sass/"))))
	http.Handle("/src/",
		http.StripPrefix("/src/",
			http.FileServer(http.Dir("assets/src/"))))
	http.Handle("/assets/css/",
		http.StripPrefix("/assets/css/",
			http.FileServer(http.Dir("assets/admin/css/"))))
	http.Handle("/assets/fonts/",
		http.StripPrefix("/assets/fonts/",
			http.FileServer(http.Dir("assets/admin/fonts/"))))
	http.Handle("/assets/fonts/flaticon/",
		http.StripPrefix("/assets/fonts/flaticon/",
			http.FileServer(http.Dir("assets/admin/fonts/flaticon/"))))
	http.Handle("/assets/fonts/fontawesome/",
		http.StripPrefix("/assets/fonts/fontawesome/",
			http.FileServer(http.Dir("assets/admin/fonts/fontawesome/"))))
	http.Handle("/assets/fonts/simple-line-icons/",
		http.StripPrefix("/assets/fonts/simple-line-icons/",
			http.FileServer(http.Dir("assets/admin/fonts/simple-line-icons/"))))
	http.Handle("/assets/fonts/summernote/",
		http.StripPrefix("/assets/fonts/summernote/",
			http.FileServer(http.Dir("assets/admin/fonts/summernote/"))))
	http.Handle("/assets/img/",
		http.StripPrefix("/assets/img/",
			http.FileServer(http.Dir("assets/admin/img/"))))
	http.Handle("/assets/js/",
		http.StripPrefix("/assets/js/",
			http.FileServer(http.Dir("assets/admin/js/"))))
	http.Handle("/assets/sass/",
		http.StripPrefix("/assets/sass/",
			http.FileServer(http.Dir("assets/admin/sass/"))))

}

func produk(w http.ResponseWriter, r *http.Request) {
	var tmpl = template.Must(template.ParseFiles(
		"views/produk/index.php",
		"views/layout/_app.php",
		"views/layout/_foapp.php",
	))
	tmpl.ExecuteTemplate(w, "index", "")
}

func admin(w http.ResponseWriter, r *http.Request) {
	var tmpl = template.Must(template.ParseFiles(
		"views/admin/index.php",
		"views/admin/layout/_app.php",
		"views/admin/layout/_foapp.php",
	))
	tmpl.ExecuteTemplate(w, "index", "")
}

func user(w http.ResponseWriter, r *http.Request) {

	db, e := config.MySQL()

	if e != nil {
		log.Fatal(e)
	}

	selDB, er := db.Query("SELECT * FROM User ORDER BY id DESC")
	if er != nil {
		panic(er.Error())
	}
	emp := User{}
	res := []User{}
	for selDB.Next() {
		var id int
		var nama, email, password string
		er = selDB.Scan(&id, &nama, &email, &password)
		if er != nil {
			panic(er.Error())
		}
		emp.Id_user = id
		emp.Nama = nama
		emp.Email = email
		emp.Password = password
		res = append(res, emp)
	}
	var tmpl = template.Must(template.ParseFiles(
		"views/admin/user/index.php",
		"views/admin/layout/_app.php",
		"views/admin/layout/_foapp.php",
	))
	tmpl.ExecuteTemplate(w, "index", res)
	defer db.Close()
}

func delete(w http.ResponseWriter, r *http.Request) {
	db, e := config.MySQL()
	if e != nil {
		log.Fatal(e)
	}
	emp := r.URL.Query().Get("id")
	delForm, err := db.Prepare("DELETE FROM User WHERE id=?")
	if err != nil {
		panic(err.Error())
	}
	delForm.Exec(emp)
	defer db.Close()
	http.Redirect(w, r, "/user", 301)
}

func insert(w http.ResponseWriter, r *http.Request) {
	db, e := config.MySQL()
	if e != nil {
		log.Fatal(e)
	}
	if r.Method == "POST" {
		nama := r.FormValue("nama")
		email := r.FormValue("email")
		password := r.FormValue("password")
		insForm, err := db.Prepare("INSERT INTO User(nama, email, password) VALUES(?,?,?)")
		if err != nil {
			panic(err.Error())
		}
		insForm.Exec(nama, email, password)
	}
	defer db.Close()
	http.Redirect(w, r, "/user", 301)
}

func main() {
	dbc()
	asset()
	http.HandleFunc("/", home)
	http.HandleFunc("/produk", produk)
	http.HandleFunc("/admin", admin)
	http.HandleFunc("/user", user)
	http.HandleFunc("/delete", delete)
	http.HandleFunc("/insert", insert)

	fmt.Println("server started at localhost:800")
	http.ListenAndServe(":800", nil)

}
