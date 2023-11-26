# Define provider
provider "aws" {
  region = "us-east-1"
}

# Create EC2 instance
resource "aws_instance" "main" {
  ami                    = "ami-0230bd60aa48260c6" # Replace with your AMI ID
  instance_type          = "t2.micro"
  key_name               = "arlink"
  subnet_id              = aws_subnet.subnet1.id
  vpc_security_group_ids = [aws_security_group.my_security_group.id]

  user_data = <<-EOF
              #!/bin/bash
              yum install -y httpd
              systemctl start httpd
              systemctl enable httpd
              EOF

  tags = {
    Name = "main-ec2"
  }
}
