package config

import (
	"database/sql"
)

const (
	username string = "root"
	password string = ""
	database string = "projek_go"
)

func MySQL() (*sql.DB, error) {
	db, err := sql.Open("mysql", username+":"+password+"@/"+database)

	if err != nil {
		return nil, err
	}
	return db, nil
}
