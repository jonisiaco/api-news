<?php

namespace classes\Book;

interface ContactInterface
{
	public create();

	public put();

	public getById();

	public delete();

	public uploadFile();
}