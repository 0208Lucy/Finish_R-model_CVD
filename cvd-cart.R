args <- commandArgs(TRUE)

gender <- as.factor(args[1]) # 性別，假設已編碼為因子類型
age <- as.numeric(args[2]) # 年齡
height <- as.numeric(args[3]) # 身高
weight <- as.numeric(args[4]) # 體重
fhwo <- as.factor(args[5])
favc <- as.factor(args[6])
fcvc <- as.numeric(args[7])
ncp <- as.numeric(args[8])
caec <- as.factor(args[9])
smoke <- as.factor(args[10])
ch2o <- as.numeric(args[11])
scc <- as.factor(args[12])
faf <- as.numeric(args[13])
tue <- as.numeric(args[14])
calc <- as.factor(args[15])
mtrans <- as.factor(args[16])





library(rpart)
load("cvd-cart.RData", .GlobalEnv)


new_data <- data.frame(
    Gender = gender,
    Age = age,
    Height = height,
    Weight = weight,
    family_history_with_overweight = fhwo,
    FAVC = favc,
    FCVC = fcvc,
    NCP = ncp,
    CAEC = caec,
    SMOKE = smoke,
    CH2O = ch2o,
    SCC = scc,
    FAF = faf,
    TUE = tue,
    CALC = calc,
    MTRANS = mtrans
)
predictions <- predict(model, newdata = new_data, type = "class")
ans <- as.vector(predictions)


print(ans)
