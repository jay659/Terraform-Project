output "vpc_id" {
  value = aws_vpc.project_vpc.id
}

output "vpc_public_subnet_1_id" {
  value = aws_subnet.public_subnet_1.id
}

output "vpc_private_subnet_1_id" {
  value = aws_subnet.private_subnet_1.id
}

output "vpc_private_subnet_2_id" {
  value = aws_subnet.private_subnet_2.id
}

output "nat_gateway_ip" {
  value = aws_nat_gateway.my_nat_gateway.public_ip
}
