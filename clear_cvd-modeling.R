dataset <- read.csv("ObesityDataSet.csv")
library(rpart)

# 建立 CART 模型
model <- rpart(NObeyesdad ~ ., data = dataset, method = "class")
# 'NObeyesdad' 是要預測的目標變數

# 查看模型
summary(model)

# 預測
predictions <- predict(model, dataset, type = "class")
# 計算混淆矩陣
confusion_matrix <- table(dataset$NObeyesdad, predictions)

# 計算準確率
accuracy <- sum(diag(confusion_matrix)) / sum(confusion_matrix)
(accuracy <- accuracy * 100)

save(model, file = "cvd-cart.RData")
