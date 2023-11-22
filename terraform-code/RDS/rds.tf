# Define provider
provider "aws" {
  region = "us-east-1"
}

# Create RDS instance
resource "aws_db_instance" "main" {
  identifier           = "main-db"
  allocated_storage    = 20
  storage_type         = "gp2"
  engine               = "mysql"
  engine_version       = "5.7"
  instance_class       = "db.t2.micro"
  username             = "admin"
  password             = "group3@3102"
  publicly_accessible = false
  vpc_security_group_ids = [aws_security_group.main.id]
  vpc_id               = aws_vpc.main.id
}
